@extends('admin.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{$site->name}} details</h1>
        <a class="btn btn-primary" href="{{url()->previous()}}" role="button">
            <div class="extending-button">
                <i class="fas fa-chevron-left"></i>
                <span class="extending-button-body">
                    Back
                </span>
            </div>
        </a>
    </div>

    <div class="col-12">
        <table class="table table-striped table-left table-bordered">
            <tr>
                <th>URL:</th>
                <td colspan="5">{{$site->site_url}}</td>
            </tr>
            <tr>
                <th>API key:</th>
                <td colspan="5">{{$site->api_key}}</td>
            </tr>
            <tr>
                <th>Return URL:</th>
                <td colspan="5">{{$site->return_url}}</td>
            </tr>
            <tr>
                <th>Callback URL:</th>
                <td colspan="5">{{$site->callback_url}}</td>
            </tr>
            <tr>
                <th class="border-0">Invoices:</th>
                <td class="border-0"><a href="{{url('admin/invoices/site/'.$site->id)}}">{{$site->invoices_count}}</a></td>
                <th class="border-right-0">Payments:</th>
                <td class="border-0"><a href="{{url('admin/payments/site/'.$site->id)}}">{{$site->paid_invoices_count}}</a></td>
                <th class="border-right-0">Created at:</th>
                <td class="border-left-0">{{$site->created_at}}</td>
            </tr>
        </table>
    </div>
@endsection