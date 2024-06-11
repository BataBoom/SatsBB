<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateInvoiceRequest;
use App\Http\Services\InvoicesService;
use App\Http\Services\PaymentService;
use App\Http\Services\WalletService;
use App\Invoice;
use App\Site;
use Illuminate\Support\Facades\App;

class InvoicesController extends Controller {


    public function createInvoice(CreateInvoiceRequest $request) {
        $status = false;
        $return = ['status' => &$status];

        $auth_token = $request->input('auth_token');
        $site = Site::where('api_key', $auth_token)->limit(1)->first();
        if ($site == null) {
            $return['message'] = 'Not authorized';
        } else {

            $hash = str_random(50) . time();

            $walletService = new WalletService();
            $walletAddress = $walletService->getnewaddress($hash);


            $invoice = new Invoice;
            $invoice->site_id = $site->id;
            $invoice->invoice_no = $request->post('invoice_no');
            $invoice->amount_original = $request->post('amount');
            $invoice->user_id = $request->post('user_id');
            $invoice->duration = $request->post('duration');
            $invoice->amount = NULL;
            $invoice->hash = $hash;
            $invoice->username = $request->post('username', NULL);
            $invoice->wallet = NULL;
            $invoice->ip = $request->post('ip');
            //dd($request->validated());

            if ($request->validated() && $invoice->save()) {
                $status = true;
                $return['invoice_url'] = App::make('url')->to('/invoice/' . $invoice->hash);
            }
        }

        return response()->json($return);
    }

    public function invoicePaid(Invoice $invoice) {
        return response()->json($invoice->status);
        return response()->json($invoice->user_id);
        return response()->json($invoice->amount);

    }
}
