@extends('admin.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Payments</h1>
    </div>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>Status</th>
            <th>API</th>
            <th>Site</th>
            <th>Wallet Service</th>
            <th>Invoice no#</th>
            <th>User ID</th>
            <th>Username</th>
            <th>Duration</th>
            <th>Amount</th>
            <th>Amount Paid</th>
            <th><a href="{{Request::fullUrlWithQuery(['sort_by' => 'created_at', 'order' => request()->get('order') == 'ASC' ? 'DESC' : 'ASC'])}}">Invoice created</a></th>
        </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>
                    @if($payment->status== 1)
                        <span class="badge badge-success">Paid</span>
                    @else
                        <span class="badge badge-danger">Not Paid</span>
                    @endif
                </td>
                <td>
                    @if($payment->api== 1)
                        <span class="badge badge-success">&nbsp;</span>
                    @else
                        <span class="badge badge-danger">&nbsp;</span>
                    @endif
                </td>
                <td>
                    <a href="{{url('admin/payments/site/'.$payment->site->id)}}">{{$payment->site->name}}</a>
                </td>
                <td>{{$payment->wallet_service->name}}</td>
                <td class="text-left">
                    <a href="{{url('admin/payments/'.$payment->hash)}}">#{{$payment->invoice_no}}</a>
                </td>
                <td>
                    <a href="{{url('admin/payments/user-'.$payment->user_id)}}">{{$payment->user_id}}</a>
                </td>
                <td>{{$payment->username}}</td>
                <td>{{$payment->duration}}</td>
                <td class="text-right">{{$payment->amount}} {{$payment->wallet_service->short_code}} (${{$payment->amount_original}})</td>
                <td class="text-right">{{$payment->amount_received}} {{$payment->wallet_service->short_code}}</td>
                <td>{{$payment->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$payments->appends(request()->query())->links()}}
@endsection