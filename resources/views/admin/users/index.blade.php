@extends('admin.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users List</h1>
        <a class="btn btn-primary" href="{{url('/admin/managers/edit')}}" role="button">
            <div class="extending-button">
                <i class="fas fa-plus"></i>
                <span class="extending-button-body">
                    Add new user
                </span>
            </div>
        </a>
    </div>
    <div class="col-12">
        <table class="table table-bordered table-striped table-sm">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Permissions</th>
                <tH>Actions</tH>
            </tr>

            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if ($user->admin)
                            <h5><span class="badge badge-danger">Admin</span></h5>
                        @else
                            <h5><span class="badge badge-secondary">Regular</span></h5>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{url('/admin/managers/edit/'.$user->id)}}"
                           role="button"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-delete-user btn-danger btn-sm" href="{{url('/admin/managers/delete/'.$user->id)}}"
                           role="button"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection

