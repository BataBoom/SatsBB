@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $key => $error)
                <div class="row col-lg-12">
                    <span>{{ $error }}</span>
                </div>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('message'))
    <div class="alert alert-success">
        <div class="row col-lg-12">
            <span>{{ Session::get('message', '') }}</span>
        </div>
    </div>
@endif