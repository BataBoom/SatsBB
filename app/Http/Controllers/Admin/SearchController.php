<?php

namespace App\Http\Controllers\Admin;

use App\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller {
    public function doSearch() {
        $search_for = \request()->input('search');
        $payments = Invoice::where('invoice_no', 'like', '%' . $search_for . '%')->orWhere('user_id', 'like', '%' . $search_for . '%')->orWhere('wallet', 'like', '%' . $search_for . '%');
        if (!auth()->user()->admin && !auth()->user()->super) {
            $payments = $payments->currentWithPermissions('invoices');
        } else {
            $payments = $payments->current();
        }
        $payments = $payments->ordered()->paginate(15)->appends(['search' => $search_for]);

        return view('admin.payments.index', compact('payments'));
    }
}
