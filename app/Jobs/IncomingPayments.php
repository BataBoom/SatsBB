<?php

namespace App\Jobs;

use App\Events\PaymentReceived;
use App\Http\Services\WalletService;
use App\IncomingPayment;
use App\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class IncomingPayments implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $invoices;
    private $drop_offset;
    private $drop_status;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public function __construct(Builder $invoices, int $drop_offset, int $drop_status) {
        $this->invoices = $invoices->get();
        $this->drop_offset = $drop_offset;
        $this->drop_status = $drop_status;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle() {
        //$invoices = Invoice::notPaid()->get();\
        //$this->invoices;
        foreach ($this->invoices as $invoice) {
            Log::debug($invoice->invoice_no);
            $paymentMinAmount = $invoice->amount - ($invoice->amount * (env('BTC_PAYMENT_DIFF', 5) / 100));
            $wls = \App\WalletService::WALLET_SERVICES[$invoice->wallet_service_id];
            $payments = (new $wls)->listtransactions($invoice->hash);
            if ($payments == null || count($payments) == 0) {
                if (strtotime($invoice->created_at . " + " . $this->drop_offset . " hours") < time()) {
                    $invoice->status = $this->drop_status;
                    $invoice->save();
                }
                continue;
            }
            foreach ($payments as $payment) {
                if ($payment['category'] == 'receive') {
                    $incoming_payment = IncomingPayment::firstOrNew(['txid' => $payment['txid']]);
                    $incoming_payment->invoice_id = $invoice->id;
                    $incoming_payment->amount = $payment['amount'];
                    $incoming_payment->wallet = $payment['address'];
                    $incoming_payment->txid = $payment['txid'];
                    $incoming_payment->timereceived = $payment['timereceived'];
                    $incoming_payment->save();
                }
            }
            $invoice->amount_received = IncomingPayment::notPaid()->where('invoice_id', $invoice->id)->sum('amount');
            if ($invoice->amount_received > $paymentMinAmount) {
                $invoice->status = 1;
            }
            $invoice->save();
            if ($invoice->status == Invoice::$_STATUS_PAID) {
                event(new PaymentReceived($invoice));
            }
        };
    }
}
