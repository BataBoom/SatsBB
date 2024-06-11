<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="{{ secure_asset('css/app.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{ secure_asset('css/core.css?'.time())}}" type="text/css"/>
    <link rel="stylesheet" href="{{ secure_asset('libs/inc/TimeCircles.css')}}" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ secure_asset('js/app.js')}}"></script>
    <script src="{{ secure_asset('/libs/inc/TimeCircles.js')}}"></script>
    <script>
        var checkUrl = '{{url('api/invoice/'.$invoice->hash)}}';
    </script>
    <script src="{{ secure_asset('js/global.js')}}" defer></script>
</head>

<header>
    <div class="col-sm-12 col-12 float-left header_layer">
        <div class="row d-block">
            <div class="col-sm-6 col-6 float-left">
                <div class="logo-responsive">
                    <a href="http://demon.test/home.html">
                        <img src="{{url('/img/logo.png')}}">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-6 float-left">
                <ul class="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<body id="home">
<div id="page">
    <div class="container">
        <div class="currency-selection-block">
            <h2 class="h2">Choose currency</h2>
            <ul class="curriencies-list">
                @foreach ($payment_methods as $payment_method)
                    <li class="coin-icon coin-icon-34 coin-rounded-{{$payment_method->name}}">
                        <a href="{{url('invoice/'.$invoice->hash.'/'.$payment_method->short_code)}}">{{$payment_method->name}}</a>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
<footer>
    <div class="col-sm-12 col-12 float-left footer_layer">
        <div class="row d-block">
            <div class="col-sm-6 col-6 float-left mobile_padding">
                <div class="all-rights-reserved">
                    &copy; SatsBB
                </div>
            </div>
            <div class="col-sm-6 col-6 float-left">
                <ul class="menu-footer">
                    <li><a href="home">Home</a></li>
                    <li><a href="faq">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>