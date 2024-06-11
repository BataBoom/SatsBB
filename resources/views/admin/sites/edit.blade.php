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
    <div class="col-12">
        <form method="post">
            @csrf
            <input type="hidden" name="id" value="{{$site->id}}"/>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" value="{{$site->name}}" name="name">
            </div>
            <div class="form-group">
                <label for="url">Site URL:</label>
                <input type="url" class="form-control" value="{{$site->site_url}}" name="site_url">
            </div>
            <div class="form-group">
                <label for="return_url">Return URL:</label>
                <input type="url" class="form-control" value="{{$site->return_url}}" name="return_url">
            </div>
            <div class="form-group">
                <label for="callback_url">Callback URL:</label>
                <input type="url" class="form-control" value="{{$site->callback_url}}" name="callback_url">
            </div>
            <h3>Wallet services</h3>
            <div class="row ml-0 mr-0 mb-3">
            @foreach($wallet_services as $wallet_service)
                <div class="card col-6 col-md-3 ml-1 mr-1" >
                    <div class="card-body">
                        <div class="form-check coin-icon coin-{{$wallet_service->name}}">

                            <input name="sws[]" class="form-check-input" type="checkbox" value="{{$wallet_service->id}}"
                                   id="wallet-service-{{$wallet_service->id}}" {{count($wallet_service->site_wallet_services) > 0 ? 'checked' :""}}>
                            <label name="sws[]" class="form-check-label" for="defaultCheck1">
                                {{$wallet_service->name}} {{$wallet_service->short_code}}
                            </label>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>


        </form>
    </div>
@endsection