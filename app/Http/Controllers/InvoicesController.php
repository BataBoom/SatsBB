<?php

namespace App\Http\Controllers;

use App\Http\Services\InvoicesService;
use App\Invoice;
use App\WalletService;
use Illuminate\Http\Request;

class InvoicesController extends Controller {

    public function invoice(Invoice $invoice, string $method = null) {
        if ($invoice->wallet_service_id == null && $method != null) {
            $wallet_service = WalletService::where('short_code', $method)->first();
            if ($wallet_service != null) {
                $invoice->wallet_service_id = $wallet_service->id;
                $wls = WalletService::WALLET_SERVICES[$wallet_service->id];
                $walletService = new $wls;
                $walletAddress = $walletService->getnewaddress($invoice->hash);
                $invoice->wallet = $walletAddress;
                $invoice->amount = number_format(InvoicesService::getAmountInCoin($wallet_service, $invoice->amount_original),8);
                $invoice->save();
            }
        }
        $payment_methods = WalletService::whereHas('site_wallet_services', function ($query) use ($invoice) {
            $query->where('site_id', $invoice->site_id);
        })->active()->get();
        $layout = 'not_paid';
        if ($invoice->status == 1) {
            $layout = 'paid';
        } else if ($invoice->wallet_service_id == NULL) {
            $layout = 'select_currency';

        }
        return view($layout, compact(['invoice', 'payment_methods']));
    }

}
