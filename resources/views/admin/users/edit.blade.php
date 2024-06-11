@extends('admin.layouts.main')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit</h1>
        <a class="btn btn-primary" href="{{url()->previous()}}" role="button">
            <div class="extending-button">
                <i class="fas fa-chevron-left"></i>
                <span class="extending-button-body">
                    Back
                </span>
            </div>
        </a>
    </div>
    <form method="post" id="users-edit">
        <div class="col-12">

            @csrf
            <input type="hidden" name="id" value="{{$user->id}}"/>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" value="{{$user->name}}" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" value="{{$user->email}}" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input id="admin" type="checkbox" class="form-check-input" name="admin"
                           value="1" {{$user->admin ? 'checked' : ''}}>
                    Admin
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

        <div style="display: {{$user->admin ? 'none' : ''}}" id="permissions" class="col-12 site-permissions">

            <h2 class="title">Sites permissions</h2>
            <div class="container-fluid row">
                @foreach($sites as $site)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card border-primary bg-light">
                            <div class="card-header card-header ">{{$site->name}}</div>
                            <div class="card-body text-primary">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Payments
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-secondary {{boolval($site->permissions[0]->payments) ? 'active' :''}} ">
                                                <input type="radio" name="site_{{$site->id}}_payments" value="1"
                                                       {{boolval($site->permissions[0]->payments) ? 'checked' :''}}     autocomplete="off">
                                                On
                                            </label>
                                            <label class="btn btn-secondary {{!boolval($site->permissions[0]->payments) ? 'active' :''}}">
                                                <input type="radio" name="site_{{$site->id}}_payments" value="0"
                                                       {{!boolval($site->permissions[0]->payments) ? 'checked' :''}}     autocomplete="off">
                                                Off
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">Invoices
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-secondary {{boolval($site->permissions[0]->invoices) ? 'active' :''}}">
                                                <input type="radio" name="site_{{$site->id}}_invoices" value="1"
                                                       {{boolval($site->permissions[0]->invoices) ? 'checked' :''}}   autocomplete="off">
                                                On
                                            </label>
                                            <label class="btn btn-secondary {{!boolval($site->permissions[0]->invoices) ? 'active' :''}}">
                                                <input type="radio" name="site_{{$site->id}}_invoices" value="0"
                                                       {{!boolval($site->permissions[0]->invoices) ? 'checked' :''}}    autocomplete="off">
                                                Off
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">Mark as paid
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-secondary {{boolval($site->permissions[0]->mark_as_paid) ? 'active' :''}}">
                                                <input type="radio" name="site_{{$site->id}}_mark_as_paid" value="1"
                                                       {{boolval($site->permissions[0]->mark_as_paid) ? 'checked' :''}}
                                                       autocomplete="off"> On
                                            </label>
                                            <label class="btn btn-secondary {{!boolval($site->permissions[0]->mark_as_paid) ? 'active' :''}}">
                                                <input type="radio" name="site_{{$site->id}}_mark_as_paid" value="0"
                                                       {{!boolval($site->permissions[0]->mark_as_paid) ? 'checked' :''}}
                                                       autocomplete="off"> Off
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </form>

@endsection