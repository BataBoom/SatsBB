<nav role="main" class="col-md-3 col-lg-2 col-12 d-md-block bg-light">
    <div>
        <div class="col-12 menu-block">
            <h4>Menu</h4>
            @include('admin.layouts.nav')
        </div>
        <div class="clearfix"></div>
        <div class="col-12">
            <form method="POST" action="{{url('/admin/search')}}">
                @csrf
                <div class="form-group">
                    <label for="search">Search:</label>
                    <input type="text"
                           name="search" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <button type="submit" class="btn btn-primary col-12">Search</button>
            </form>
        </div>
    </div>

</nav>