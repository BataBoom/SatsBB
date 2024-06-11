@extends('admin.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Sites List</h1>
        <a class="btn btn-primary" href="{{url('/admin/sites/edit')}}" role="button">
            <div class="extending-button">
                <i class="fas fa-plus"></i>
                <span class="extending-button-body">
                    Add new site
                </span>
            </div>
        </a>
    </div>
    <div class="col-12">
        <table class="table table-bordered table-striped table-sm">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Site URL</th>
                <th>Invoices</th>
                <th>Payments</th>
                <th>Payment Services</th>
                <th>Actions</th>
            </tr>

            @foreach($sites as $site)
                <tr>
                    <td>#{{$site->id}}</td>
                    <td><a href="{{url('/admin/sites/view/'.$site->id)}}">{{$site->name}}</a></td>
                    <td>{{$site->site_url}}</td>
                    <td><a href="{{url('admin/invoices/site/'.$site->id)}}">{{$site->invoices_count}}</a></td>
                    <td><a href="{{url('admin/payments/site/'.$site->id)}}">{{$site->paid_invoices_count}}</a></td>
                    <td>
                        @foreach($site->payment_methods as $payment_method)
                            @if ($payment_method->active)
                            <span class="coin-icon coin-icon-24 coin-{{$payment_method->name}}">{{$payment_method->name}}</span>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        <a class="btn btn-secondary btn-sm" href="{{url('/admin/sites/view/'.$site->id)}}"
                           role="button"><i class="fas fa-list-ul"></i></a>
                        <a class="btn btn-primary btn-sm" href="{{url('/admin/sites/edit/'.$site->id)}}"
                           role="button"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-delete-site btn-danger btn-sm"
                           href="{{url('/admin/sites/delete/'.$site->id)}}"
                           role="button"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection

