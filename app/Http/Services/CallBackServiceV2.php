<?php

namespace App\Http\Services;

use App\Invoice;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class CallBackServiceV2 {

    private $invoice;
    private $url;

    public function __construct(Invoice $invoice) {
        $this->invoice = $invoice;
        $this->url = $this->invoice->site->callback_url;
    }

    public function execute() {

        if ($this->invoice->status == 1 && $this->invoice->api == 0) {
            $client = new Client();

            $fields = array(
                'invoice_id' => $this->invoice->invoice_no,
                'user_id' => $this->invoice->user_id,
                'paysys_id' => 'satsbb',
                'receipt_id' => 1,
                'currency' => 'USD',
                'amount' => $this->invoice->amount_original,
                'transaction_id' => $this->invoice->wallet,
                'begin_date' => date("Y-m-d"),
                'expire_date' => date("Y-m-d", strtotime("+" . $this->invoice->duration))
            );

            $this->invoice->api = 1;
            $this->invoice->save();

            Log::info('User notified ' . $this->url);
            Log::debug('URL notified ' . json_encode($fields, true));

            $client->request('POST', $this->url, ['form_params' => $fields]); 
        }
    }
}
