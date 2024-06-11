@extends('admin.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Payment #{{$invoice->invoice_no}} details</h1>
        <div>
            @if ($invoice->status != 1 && (auth()->user()->admin || auth()->user()->super || $invoice->site->permissions[0]->mark_as_paid))
                <a name="" id="" class="btn btn-primary "
                   href="{{url('/admin/invoices/'.$invoice->hash.'/paid')}}"
                   role="button">
                    <div class="extending-button"><i class="fas fa-shopping-basket"></i>
                        <div class="extending-button-body"> &nbsp;Set paid</div>
                    </div>
                </a>
            @else
                <a name="" id="" class="btn btn-secondary"
                   href="#"
                   role="button">
                    <div class="extending-button">
                        <i class="fas fa-shopping-basket"></i>
                        <div class="extending-button-body"> Set paid</div>
                    </div>
                </a>

            @endif
            <a class="btn btn-primary" href="{{url()->previous()}}" role="button">
                <div class="extending-button">
                    <i class="fas fa-chevron-left"></i>
                    <span class="extending-button-body">
                    Back
                </span>
                </div>
            </a>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Invoice no#</th>
            <th>User id</th>
            <th>Duration</th>
            <th>Amount</th>
            <th>Amount Paid</th>
            <th>Amember Transaction ID</th>
            <th>IP</th>
            <th>Invoice created</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$invoice->invoice_no}}</td>
            <td>{{$invoice->user_id}}</td>
            <td>{{$invoice->duration}}</td>
            <td>{{$invoice->amount}} {{$invoice->wallet_service->short_code}} (${{$invoice->amount_original}})</td>
            <td>{{$invoice->amount_received}} {{$invoice->wallet_service->short_code}}</td>
            <td>{{$invoice->wallet}}</td>
            <td>{{$invoice->ip}}</td>
            <td>{{$invoice->created_at}}</td>
        </tr>
        </tbody>
    </table>


    <table class="table table-striped table-light table-sm">
        <thead>
        <tr>
            <th>Amount</th>
            <th>Transaction ID</th>
            <th>Time Received</th>
        </tr>
        </thead>
        <tbody>
        @foreach($invoice->incoming_payments as $payment)
            <tr>
                <td>{{$payment->amount}} {{$invoice->wallet_service->short_code}}</td>
                <td>{{$payment->txid}}</td>
                <td>{{date("Y-m-d H:i:s", $payment->timereceived)}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection