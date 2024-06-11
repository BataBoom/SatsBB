<?php

namespace App\Http\Controllers;

use App\Events\PaymentReceived;
use App\Http\Services\PaymentService;
use App\Http\Services\WalletService;
use App\IncomingPayment;
use App\Invoice;
use Illuminate\Http\Request;

class IncomingPaymentsController extends Controller {

    public function getPayments() {

    }

}
