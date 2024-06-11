<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">

    <script src="{{ secure_asset('js/app.js')}}"></script>
    <script src="{{ secure_asset('/libs/inc/TimeCircles.js')}}"></script>
    <script src="{{ secure_asset('js/global.js')}}"></script>

    <link rel="stylesheet" href="{{ secure_asset('css/app.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{ secure_asset('css/core.css?'.time())}}" type="text/css"/>
    <link rel="stylesheet" href="{{ secure_asset('libs/inc/TimeCircles.css')}}" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body id="overlay">
<div id="page">
    <div class="container">
        <div style="margin: 0 auto">
            <img src="{{url('img/fav.png')}}">
            <h2>Thank you for payment</h2>
            <a class="btn btn-green" href="{{$invoice->site->return_url}}"
               role="button">Close</a>
        </div>
    </div>
</div>
<footer>
    <div class="col-sm-12 col-12 float-left footer_layer">
        <div class="row d-block">
            <div class="col-sm-6 col-6 float-left mobile_padding">
                <div class="all-rights-reserved">
                    &copy; 2023, Cryptoland
                </div>
            </div>
            <div class="col-sm-6 col-6 float-left">
                <ul class="menu-footer">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>