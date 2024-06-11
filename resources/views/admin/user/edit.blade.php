@extends('admin.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Info</h1>
        <a class="btn btn-primary" href="{{url()->previous()}}" role="button">
            <div class="extending-button">
                <i class="fas fa-chevron-left"></i>
                <span class="extending-button-body">
                    Back
                </span>
            </div>
        </a>
    </div>


    <form method="POST" action="/admin/user/edit">

        @csrf
        <div class="form-group">
            <label for="">Name:</label>
            <input type="text"
                   class="form-control" value="{{auth()->user()->name}}" name="name" id="name" aria-describedby="helpId"
                   placeholder="">
        </div>
        <div class="form-group">
            <label for="">Email:</label>
            <input type="text"
                   class="form-control" value="{{auth()->user()->email}}" name="email" id="email"
                   aria-describedby="helpId" placeholder="">
        </div>
        <button type="submit" class="btn">Submit</button>
    </form>

@endsection