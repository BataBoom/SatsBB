<?php

namespace App\Http\Services;

use App\Invoice;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class CallBackService {

    private $invoice;
    private $url = "http://".env('MY_DOMAIN')."/api";


    public function __construct(Invoice $invoice) {
        $this->invoice = $invoice;
    }

    public function execute() {

        if ($this->invoice->status == 1 && $this->invoice->api == 0) {
            $client = new Client();
            $fields = array(
                '_key' => env('MY_API_KEY'),
                '_method' => 'PUT',
                '_id' => $this->invoice->invoice_no,
                'status' => '1',
                'invoice_id' => $this->invoice->invoice_no
            );

            $result = $client->request('POST', $this->url . "/invoices/" . $fields['_id'], [
                'form_params' => $fields
            ]);

            $result_json = json_decode($result->getBody());

            $fields = array(
                '_method' => 'POST',
                '_key' => env('MY_API_KEY'),
                'invoice_id' => $this->invoice->invoice_no,
                'user_id' => $this->invoice->user_id,
                'paysys_id' => 'offline',
                'receipt_id' => '1',
                'transaction_id' => $this->invoice->wallet,
                'currency' => 'USD',
                'amount' => $result_json[0]->first_total
            );

            $result = $client->request('POST', $this->url . "/invoice-payments/", [
                'form_params' => $fields
            ]);

            $tmp = "invoice-items";
            $tmp2 = $result_json[0]->nested->$tmp;

            $payment_json = json_decode($result->getBody());

            $fields = array(
                '_method' => "POST",
                '_key' => env('MY_API_KEY'),
                'invoice_id' => $this->invoice->invoice_no,
                'invoice_item_id' => $tmp2[0]->invoice_item_id,
                'invoice_payment_id' => $payment_json[0]->invoice_payment_id,
                'user_id' => $this->invoice->user_id,
                'product_id' => $tmp2[0]->item_id,
                'transaction_id' => $this->invoice->wallet,
                'begin_date' => date("Y-m-d"),
                'expire_date' => date("Y-m-d", strtotime("+" . $this->invoice->duration))
            );
            $tmp = $client->request('GET', $this->url . "/access/?_key=".env('MY_API_KEY')."&_filter[user_id]=" . $this->invoice->user_id);
            $tmp = json_decode($tmp->getBody());

            $max_expire_ts = 0;
            foreach ($tmp as $a) {
                if (!isset($a->access_id)) continue;
                if ($a->product_id == "22") continue;
                if ($a->product_id == "4") continue;

                $max_expire_ts_tmp = strtotime($a->expire_date);
                if ($max_expire_ts_tmp > $max_expire_ts) {
                    $max_expire_ts = $max_expire_ts_tmp;
                }

            }
            if ($max_expire_ts > 0 AND $max_expire_ts > date("U")) {
                $fields['begin_date'] = date("Y-m-d", $max_expire_ts);
                $fields['expire_date'] = date("Y-m-d", strtotime("+" . $this->invoice->duration, $max_expire_ts));
            }

            $result = $client->request('POST', $this->url . "/access/", ['form_params' => $fields]);

            $this->invoice->api = 1;
            $this->invoice->save();

            Log::error('User notified ' . $this->url);
        }
    }
}
