<?php

namespace App\Listeners;

use App\Events\PaymentReceived;
use App\Http\Services\CallBackService;
use App\Http\Services\CallBackServiceV2;
use Illuminate\Support\Facades\Log;

class PaymentReceivedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(PaymentReceived $event)
    {
        if ($event->invoice->site_id == 1) {
            (new CallBackServiceV2($event->invoice))->execute();
        } else {
            //
            Log::debug('CallBackService not set');
        }
    }
}
