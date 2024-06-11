@extends('admin.layouts.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User {{$payments[0]->user_id}} payments</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach($payments as $payment)
                <div class="col-12">
                    <div class="card payments-card">
                        <div class="card-header {{$payment->status == 1 ? 'bg-success' : 'bg-danger'}}">
                            Invoice ID: <a href="{{url('/admin/payments/'.$payment->hash)}}">#{{$payment->invoice_no}}</a>
                            <div class="float-right">{{$payment->created_at}}</div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row">
                                <div class="col-6 font-weight-bold">Duration:</div>
                                <div class="col-6">{{$payment->duration}}</div>
                            </div>
                            <div class="row">
                                <div class="col-6 font-weight-bold">Amount:</div>
                                <div class="col-6">{{$payment->amount}}{{$payment->wallet_service->short_code}} ( ${{$payment->amount_original}})</div>
                            </div>
                            <div class="row">
                                <div class="col-6 font-weight-bold">Paid:</div>
                                <div class="col-6">{{$payment->amount_received}} {{$payment->wallet_service->short_code}}</div>
                            </div>
                            <div class="row">
                                <div class="col-6 font-weight-bold">Amember transaction ID:</div>
                                <div class="col-6">{{$payment->wallet}}</div>
                            </div>
                            <div class="row">
                                <div class="col-6 font-weight-bold">IP:</div>
                                <div class="col-6">{{$payment->ip}}</div>
                            </div>
                        </div>
                        @if(count($payment->incoming_payments) > 0)
                            <table class="table table-striped table-sm table-bordered th-center">
                                <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Transaction ID</th>
                                    <th>Time Received</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($payment->incoming_payments as $incoming_payment)
                                    <tr>
                                        <td>{{$incoming_payment->amount}} {{$payment->wallet_service->short_code}}</td>
                                        <td>{{$incoming_payment->txid}}</td>
                                        <td>{{date("Y-m-d H:i:s", $incoming_payment->timereceived)}}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{$payments->links()}}
@endsection