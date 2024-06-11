<?php

namespace App\Http\Controllers\Admin;

use App\Events\PaymentReceived;
use App\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class InvoicesController extends Controller {

    protected $with = ['invoice'];

    public function payments(?int $site = null) {
        $payments = Invoice::with('wallet_service')->with(['site' => function ($query) {
            $query->with(['permissions' => function($query) {
                $query->where('user_id', auth()->user()->id);
            }]);
        }]);
        if (!is_null($site)) {
            $payments = $payments->where('site_id', $site);
        }
        if (!auth()->user()->admin && !auth()->user()->super) {
            $payments = $payments->currentWithPermissions('payments');
        } else {
            $payments = $payments->current();
        }
        $payments = $payments->paid()->ordered()->paginate(15);
        return view('admin.payments.index', compact('payments'));
    }

    public function invoices(?int $site = null) {
        $invoices = Invoice::with('wallet_service')->with(['site' => function ($query) {
            $query->with(['permissions' => function($query) {
                $query->where('user_id', auth()->user()->id);
            }]);
        }]);
        if (!is_null($site)) {
            $invoices = $invoices->where('site_id', $site);
        }
        if (!auth()->user()->admin && !auth()->user()->super) {
            $invoices = $invoices->currentWithPermissions('invoices');
        } else {
            $invoices = $invoices->current();
        }
        $invoices = $invoices->paymentSelected()->ordered()->paginate(15);
        return view('admin.payments.invoices', ['payments' => $invoices]);
    }

    public function getPaymentInfo($hash) {

        $invoice = Invoice::with('wallet_service')->where('hash', $hash)->with(['site' => function ($query) {
            $query->with(['permissions' => function($query) {
                $query->where('user_id', auth()->user()->id);
            }]);
        }]);
        if (!auth()->user()->admin && !auth()->user()->super) {
            $invoice = $invoice->currentWithPermissions('payments');
            if ($invoice->first() == null) {
                abort(403);
            }
        } else {
            $invoice = $invoice->current();
        }
        $invoice = $invoice->paymentSelected()->first();
        if ($invoice == null) {
            abort(404);
        }
        return view('admin.payments.payment', compact('invoice'));
    }

    public function getUserPayments(int $user) {
        $payments = Invoice::where('user_id', $user);
        if (!auth()->user()->admin && !auth()->user()->super) {
            $payments = $payments->currentWithPermissions('payments');
        } else {
            $payments = $payments->current();
        }
        $payments = $payments->with('wallet_service')->paymentSelected()->ordered()->paginate(10);
        if ($payments->isEmpty()) {
            abort(404);
        }
        return view('admin.payments.user', compact('payments'));
    }

    public function setPaymentStatus(string $hash) {
        $invoice = Invoice::where('hash', $hash);
        if (!auth()->user()->admin && !auth()->user()->super) {
            $invoice = $invoice->currentWithPermissions('mark_as_paid');
        } else {
            $invoice = $invoice->current();
        }
        $invoice = $invoice->first();
        if ($invoice == null) {
            abort(403);
        }

        $invoice->status = 1;
        $invoice->save();
        event(new PaymentReceived($invoice));
        return redirect()->back()->with('message', 'Invoice marked as paid. System will be notified in 1 minute');
    }
}
