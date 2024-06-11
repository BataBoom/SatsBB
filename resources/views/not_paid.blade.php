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
        <div class="col-sm-12 col-12 float-left header_layer">
            <div class="row d-block">
                <div class="col-md-6 col-sm-12 col-12 float-left">
                    <div class="head_time">
                        <h1>Making payment of ${{$invoice->amount_original}} </h1>

                        <h3 class="btc-price">({{$invoice->amount}}) {{$invoice->wallet_service->short_code}}</h3>
                        <br>
                        <h4 style="font-size: 14px; line-height: 11px;">TIME REMAINING</h4>
                        <div data-aos="fade-up" data-aos-anchor="#first-screen" data-aos-delay="400"
                             class="TimeCircles js-TimeCircles" data-timer="1200"></div>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12 float-left">
                    <div class="qr_block">
                        <div class="qr_layer">
                            <img src="{{url('/qr-code?hash='.$invoice->wallet.'?amount='.$invoice->amount).'&wls='.$invoice->wallet_service_id}}">
                        </div>
                        <p style="text-align: center">OR</p>
                        <div class="col-12 col-sm-12 tooltip_layer">
                            <input type="text" value="{{$invoice->wallet}}" id="myInput">
                            <div class="tooltip">
                                <button id="btn-copy-acoount" onmouseout="tooltipFunction()">
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                    Copy
                                </button>
                            </div>
                        </div>
                        @if($invoice->wallet_service_id == 1)
                            <div class="col-12 col-sm-12 payment_button_layer">
                                <a href="bitcoin:{{$invoice->wallet}}?amount={{$invoice->amount}}"
                                   class="btn payment_button">
                                    Open wallet
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="col-sm-12 col-12 float-left footer_layer">
        <div class="row d-block">
            <div class="col-sm-6 col-6 float-left mobile_padding">
                <div class="all-rights-reserved">
                    &copy; 2023, SatsBB
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
