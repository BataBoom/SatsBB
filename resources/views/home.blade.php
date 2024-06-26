<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>SatsBB</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->

    <link rel="stylesheet" href="css/main.min.css">

    <!-- Load google font
    ================================================== -->
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Catamaran:300,400,600,700', 'Raleway:100,700', 'Roboto:700'] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- Load other scripts
    ================================================== -->
    <script type="text/javascript">
        var _html = document.documentElement;
        _html.className = _html.className.replace("no-js","js");
    </script>

    <style>.preloader{width: 100%;height: 100%;position: fixed;background-color: #fff;z-index: 9999;}</style>

</head>

<body>

<div class="preloader"></div>

<header class="header">
    <a href="#" class="logo">
        <div class="logo__img"></div>
        <div class="logo__title">SatsBB</div>
    </a>

    <ul class="menu">
        <li class="menu__item">
            <a href="#about" class="menu__link">About</a>
        </li>
        <li class="menu__item">
            <a href="#services" class="menu__link">Services</a>
        </li>
        <li class="menu__item">
            <a href="#map" class="menu__link">Road Map</a>
        </li>
        <li class="menu__item">
            <a href="#stat" class="menu__link">Statistic</a>
        </li>
        <li class="menu__item">
            <a href="#token" class="menu__link">Token</a>
        </li>
        <li class="menu__item">
            <a href="#docs" class="menu__link">WhitePappers</a>
        </li>
        <li class="menu__item">
            <a href="#team" class="menu__link">Team</a>
        </li>
        <li class="menu__item">
            <a href="#faq" class="menu__link">FAQ</a>
        </li>
    </ul>

    <div class="header__right">
        <select class="select">
            <option value="ru">ru</option>
            <option value="ua">ua</option>
            <option value="en">en</option>
        </select>
        <div class="sign-in-wrap">
            <a href="" class="btn-sign-in">Sign in</a>
        </div>
        <div class="sign-up-wrap">
            <a href="" class="btn-sign-up">Sign up</a>
        </div>
    </div>

    <div class="btn-menu">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
    </div>
</header>

<div class="fixed-menu">
    <div class="fixed-menu__header">
        <a href="#" class="logo logo--color">
            <div class="logo__img"></div>
            <div class="logo__title">SatsBB</div>
        </a>

        <div class="btn-close">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve" width="512px" height="512px">
						<path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88   c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242   C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879   s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z" fill="#006DF0"/></svg>
        </div>
    </div>

    <div class="fixed-menu__content">

        <ul class="mob-menu">
            <li class="mob-menu__item">
                <a href="#about" class="mob-menu__link">About</a>
            </li>
            <li class="mob-menu__item">
                <a href="#services" class="mob-menu__link">Services</a>
            </li>
            <li class="mob-menu__item">
                <a href="#map" class="mob-menu__link">Road Map</a>
            </li>
            <li class="mob-menu__item">
                <a href="#statistic" class="mob-menu__link">Statistic</a>
            </li>
            <li class="mob-menu__item">
                <a href="#token" class="mob-menu__link">Token</a>
            </li>
            <li class="mob-menu__item">
                <a href="#docs" class="mob-menu__link">WhitePappers</a>
            </li>
            <li class="mob-menu__item">
                <a href="#team" class="mob-menu__link">Team</a>
            </li>
            <li class="mob-menu__item">
                <a href="#faq" class="mob-menu__link">FAQ</a>
            </li>
        </ul>

        <select class="select">
            <option value="ru">ru</option>
            <option value="ua">ua</option>
            <option value="en">en</option>
        </select>

        <div class="btn-wrap">
            <a href="" class="btn-sign-in">Sign in</a>
            <a href="" class="btn-sign-up">Sign up</a>
        </div>


    </div>
</div>

<div class="wrapper">

    <img src="img/big-triangle-bg-right.png" class="wrapper__bg" alt="">

    <section class="promo">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col">
                    <div class="promo__content" data-aos="fade-up">
                        <div class="promo__subtitle">SatsBB</div>
                        <h1 class="title title--big title--white promo__title">
                            Blockchain is future
                            <span>of the business technology</span>
                        </h1>
                        <p>
                            Spend real fights effective anything extra by leading. Mouthwatering leading how real formula also locked-in have can mountain thought. Jumbo plus shine sale.
                        </p>

                        <form action="#" id="subscribe-top" class="form join-us">
                            <input name="subscribe_top__email" class="form__input join-us__input" type="email" placeholder="Email">
                            <button class="form__btn join-us__btn">Join ICO</button>
                        </form>
                    </div>

                    <img src="img/city.png" data-aos="fade-left"  alt="" class="promo__img">
                </div>
            </div>
        </div>
        <img src="img/aboutBg.png" class="promo__bg" alt="">
    </section>

    <section class="partners partners--top-animation section section--small-pt">
        <div class="container">
            <div class="row">
                <div class="col  partners__logoes">
                    <div class="partners__logo">
                        <img src="img/partners-logo-1.png" alt="">
                    </div>
                    <div class="partners__logo">
                        <img src="img/partners-logo-2.png" alt="">
                    </div>
                    <div class="partners__logo">
                        <img src="img/partners-logo-3.png" alt="">
                    </div>
                    <div class="partners__logo">
                        <img src="img/partners-logo-4.png" alt="">
                    </div>
                    <div class="partners__logo">
                        <img src="img/partners-logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about section section--no-pt ">

        <div class="container">
            <div class="row about__first-row">
                <img src="img/about-img-1.png" class="about__img-1"  alt="">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="block-header">
                        <div class="subtitle subtitle--tire">About ICO</div>
                        <h2 class="title title--black title--medium">SatsBB Theme
                            is the best for your ICO  </h2>
                    </div>

                    <p>
                        Spend real fights effective anything extra by leading. Mouthwatering leading how real formula also locked-in have can mountain thought. Jumbo plus shine sale.
                    </p>

                    <ul class="about__list-marker">
                        <li>
                            Mouthwatering leading how real formula also
                        </li>
                        <li>
                            Locked-in have can mountain thought
                        </li>
                        <li>
                            Locked-in have can mountain thought
                        </li>
                    </ul>
                    <a class="popup-youtube video-btn" href="http://www.youtube.com/watch?v=0O2aH4XLbto"></a>
                </div>
            </div>
            <div class="row about__second-row">
                <img src="img/about-img-2.png" class="about__img-2" alt="">
                <div class="col-lg-6 offset-lg-6" data-aos="fade-left">
                    <div class="block-header">
                        <div class="subtitle subtitle--tire">decentralised economy</div>
                        <h2 class="title title--black title--medium">A banking platform that
                            enables developer solutions</h2>
                    </div>

                    <p>
                        Spend real fights effective anything extra by leading. Mouthwatering leading how real formula also locked-in have can mountain thought. Jumbo plus shine sale.
                    </p>

                    <ul class="about__list-check">
                        <li>
                            <span>Modular structure</span> enabling easy implementation for different softwares
                        </li>
                        <li>
                            <span>Advanced payment</span> and processing technologies, fine-tuned from more than 3 years of development testing
                        </li>
                        <li>
                            <span>Unified AppStore</span> for retail cryptocurrency solutions with a Crypterium products audience
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="service section section--no-pt">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="block-header block-header--animated block-header--center">
                        <div class="subtitle">Awesome services</div>
                        <h2 class="title title--medium title--black">Awesome services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="service__item" data-aos="fade-up">
                        <div class="service__item-content">
                            <div class="service__item-icon">
                                <img src="img/service-icon-1.svg" alt="">
                            </div>

                            <h3 class="service__item-title">SatsBB App</h3>
                            <p>
                                Asiatic glassfish pilchard sandburrower, orangestriped triggerfish hamlet Molly Miller
                            </p>
                        </div>

                        <a href="" class="service__btn">Join ICO</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service__item" data-aos="fade-up" data-aos-delay="200">
                        <div class="service__item-content">
                            <div class="service__item-icon">
                                <img src="img/service-icon-2.svg" alt="">
                            </div>

                            <h3 class="service__item-title">Mining Service</h3>
                            <p>
                                Spend real fights effective anything extra by leading. Mouthwatering leading
                            </p>
                        </div>

                        <a href="" class="service__btn">Join ICO</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service__item" data-aos="fade-up" data-aos-delay="400">
                        <div class="service__item-content">
                            <div class="service__item-icon">
                                <img src="img/service-icon-3.svg" alt="">
                            </div>

                            <h3 class="service__item-title">Blockchain</h3>
                            <p>
                                Clownfish catfish antenna codlet alfonsino squirrelfish deepwater flathead sea
                            </p>
                        </div>

                        <a href="" class="service__btn">Join ICO</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service__item" data-aos="fade-up" data-aos-delay="600">
                        <div class="service__item-content">
                            <div class="service__item-icon">
                                <img src="img/service-icon-4.svg" alt="">
                            </div>

                            <h3 class="service__item-title">Exchange</h3>
                            <p>
                                Barbelless catfish pelican gulper candlefish thornfishGulf menhaden ribbonbearer
                            </p>
                        </div>

                        <a href="" class="service__btn">Join ICO</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="map" class="map section section--no-pt">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="block-header block-header--animated block-header--center">
                        <div class="subtitle">Our way</div>
                        <h2 class="title title--medium title--black">Road Map</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                    <div class="road">
                        <div class="road__item">
                            <div class="road__item-metka"></div>
                            <div class="road__item-content">
                                <div class="road__item-title">
                                    June 2017
                                </div>
                                <p>
                                    Stats Center Beta
                                </p>
                            </div>

                        </div>

                        <div class="road__item">
                            <div class="road__item-metka"></div>
                            <div class="road__item-content">
                                <h4 class="road__item-title">
                                    July 2017
                                </h4>
                                <p>
                                    BI Intergration
                                </p>
                            </div>

                        </div>

                        <div class="road__item">
                            <div class="road__item-metka"></div>
                            <div class="road__item-content">
                                <h4 class="road__item-title">
                                    December 2017
                                </h4>
                                <p>
                                    Fantasy Prototype
                                </p>
                            </div>
                        </div>

                        <div class="road__item">
                            <div class="road__item-metka"></div>
                            <div class="road__item-content">
                                <h4 class="road__item-title">
                                    December 2017
                                </h4>
                                <p>
                                    Tokens Crowdsale
                                </p>
                            </div>
                        </div>

                        <div class="road__item road__item-active">
                            <div class="road__item-metka"></div>
                            <div class="road__item-content">
                                <h4 class="road__item-title">
                                    January 2018
                                </h4>
                                <p>
                                    Blogging Platform
                                </p>
                            </div>
                        </div>

                        <div class="road__item road__item-next">
                            <div class="road__item-metka"></div>
                            <div class="road__item-content">
                                <h4 class="road__item-title">
                                    April 2018
                                </h4>
                                <p>
                                    Fantasy Sports with SCR
                                </p>
                            </div>
                        </div>

                        <div class="road__item road__item-next">
                            <div class="road__item-metka"></div>
                            <div class="road__item-content">
                                <h4 class="road__item-title">
                                    May 2018
                                </h4>
                                <p>
                                    Advertizing System
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section  class="process section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="block-header block-header--animated block-header--center">
                        <div  class="subtitle">Process</div>
                        <h2 class="title title--medium title--white">How it Works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="process__steps">
                        <div class="process__step" data-aos="fade-left">
                            <div class="process__step-icon">
                                <img src="img/pr-icon-1.svg" alt="">
                            </div>
                            <h3 class="process__step-title">
                                Processing
                            </h3>
                        </div>

                        <div class="process__step" data-aos="fade-left" data-aos-delay="200">
                            <div class="process__step-icon">
                                <img src="img/pr-icon-2.svg" alt="">
                            </div>
                            <h3 class="process__step-title">
                                Identification
                            </h3>
                        </div>

                        <div class="process__step" data-aos="fade-left" data-aos-delay="400">
                            <div class="process__step-icon">
                                <img src="img/pr-icon-3.svg" alt="">
                            </div>
                            <h3 class="process__step-title">
                                Exchange for other <br> crypto currency
                            </h3>
                        </div>
                        <div class="process__step" data-aos="fade-left" data-aos-delay="600">
                            <div class="process__step-icon">
                                <img src="img/pr-icon-4.svg" alt="">
                            </div>
                            <h3 class="process__step-title">
                                Analitic
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="statistic" class="stat section">
        <div class="container">
            <div class="row stat__first-row">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="block-header block-header--animated">
                        <div class="subtitle subtitle--tire">Our data</div>
                        <h2 class="title title--black title--medium">Statistic Information</h2>
                    </div>

                    <div class="stat__content">

                        <p>
                            Spend real fights effective anything extra by leading. Mouthwatering leading how real formula also locked-in have can mountain thought. Jumbo plus shine sale.
                        </p>

                        <ul class="stat__designations">
                            <li>How real formula also</li>
                            <li>Leading how real formula also </li>
                            <li>Formula also </li>
                            <li>Mouthwatering leading</li>
                            <li>Formula also leading how real</li>
                        </ul>

                    </div>

                </div>

                <img src="img/graphic.png" class="stat__graphic" alt="">
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class=" ter__item">
                        <div class="counter__item-title">Current elixit price (BTC)</div>
                        <div class="counter counter__item-value counter__item-value--blue numscroller">0.052646</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter__item">
                        <div class="counter__item-title">Avarage batches used</div>
                        <div class="counter counter__item-value counter__item-value--pink">5.658</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter__item">
                        <div class="counter__item-title">Total batches remaining</div>
                        <div class="counter counter__item-value counter__item-value--green">20.324</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter__item">
                        <div class="counter__item-title">Percentage batches</div>
                        <div class="counter counter__item-value counter__item-value--percent counter__item-value--purpure">65</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ico">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="ico__body">
                        <div class="ico__content">
                            <h2 class="ico__title">
                                ICO Open!
                            </h2>

                            <div class="ico__bar">
                                <div class="ico__bar-marker ico__bar-marker--800">
                                    <div class="ico__bar-marker-title">
                                        800K
                                    </div>
                                </div>

                                <div class="ico__bar-marker ico__bar-marker--23">
                                    <div class="ico__bar-marker-title">
                                        2.3M
                                    </div>
                                </div>

                                <div class="ico__bar-marker ico__bar-marker--5">
                                    <div class="ico__bar-marker-title">
                                        5M
                                    </div>
                                </div>

                                <div class="ico__bar-marker ico__bar-marker--9">
                                    <div class="ico__bar-marker-title">
                                        9M
                                    </div>
                                </div>

                                <div class="ico__bar-max-value">
                                    12M USD MAX
                                </div>

                            </div>

                            <div class="ico__row">

                                <div class="ico__timer">
                                    <h4 class="ico__timer-title">
                                        ICO will end:
                                    </h4>

                                    <div class="timer" id="timer"></div>
                                </div>

                                <a href="" class="btn btn--medium">Register on ICO</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="faq section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div data-aos="fade-up" class="block-header block-header--animated block-header--center">
                        <div class="subtitle">FAQ</div>
                        <h2 class="title title--medium title--black">
                            Frequency Asked Questions
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq__item" data-aos="fade-up">
                        <h3 class="faq__item-title">
                            Frequency Asked Questions
                        </h3>
                        <p>
                            JavaScript is also used in environments that aren’t web-based, such as PDF documents, site-specific browsers, and desktop widgets. Newer and faster JavaScript virtual machines (VMs) and platforms built upon them have also increased the popularity of JavaScript for server-side web applications. On
                        </p>
                    </div>
                    <div class="faq__item" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="faq__item-title">
                            Does the crowdsale comply with legal regulations?
                        </h3>
                        <p>
                            Newer and faster JavaScript virtual machines (VMs) and platforms built upon them have also increased the popularity of JavaScript for server-side web applications. On the client side, JavaScript has been traditionally implemented as an interpreted language, but more recent browsers perform just-in-time compilation.
                        </p>
                    </div>
                    <div class="faq__item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="faq__item-title">
                            Can I trade SCR at an exchange?
                        </h3>
                        <p>
                            Can I trade SCR at an exchange?
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq__item" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="faq__item-title">
                            What is the difference between Coin tokens and Power tokens?
                        </h3>
                        <p>
                            Newer and faster JavaScript virtual machines (VMs) and platforms built upon them have also increased the popularity of JavaScript for server-side web applications. On the client side, JavaScript has been traditionally implemented as an interpreted language, but more recent browsers perform
                        </p>
                    </div>
                    <div class="faq__item" data-aos="fade-up" data-aos-delay="400">
                        <h3 class="faq__item-title">
                            Why is Scorum’s economic model sustainable?
                        </h3>
                        <p>
                            On the client side, JavaScript has been traditionally implemented as an interpreted language, but more recent browsers perform just-in-time compilation.
                        </p>
                    </div>
                    <div class="faq__item" data-aos="fade-up" data-aos-delay="500">
                        <h3 class="faq__item-title">
                            Can I mine SCR?
                        </h3>
                        <p>
                            Can I trade SCR at an exchange?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="app section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8" data-aos="fade-right" >
                    <div class="block-header block-header--animated">
                        <div class="subtitle subtitle--tire">Mobile app</div>
                        <h2 class="title title--black title--medium">
                            SatsBB App for ICO Platform
                        </h2>
                    </div>

                    <p>
                        JavaScript virtual machines (VMs) and platforms built upon them have also increased the popularity of JavaScript for server-side web applications. On the client side, JavaScript
                    </p>

                    <div class="app__dowload-links">
                        <a href="" class="app__link">
                            <img src="img/gp.png" alt="">
                        </a>
                        <a href="" class="app__link">
                            <img src="img/as.png" alt="">
                        </a>
                    </div>
                </div>
                <img src="img/iphone.png" data-aos="fade-left" data-aos-offset="-200" data-aos-delay="400" alt="" class="app__iphone">
            </div>
        </div>
    </section>

    <section id="token" class="token section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6" data-aos="fade-left" >
                    <div class="block-header block-header--animated">
                        <div class="subtitle subtitle--tire">About token</div>
                        <h2 class="title title--medium title--black">Token Sale</h2>
                    </div>

                    <ul class="token__info-list">
                        <li>
                            <span>Name:</span> SatsBB Token
                        </li>
                        <li>
                            <span>Type:</span> ERC20
                        </li>
                        <li>
                            <span>Symbol:</span> IQN
                        </li>
                        <li>
                            <span>Platform:</span> Ethereum
                        </li>
                        <li>
                            <span>General release:</span> 10,000,000 IQN
                        </li>
                    </ul>

                    <div class="token__desc">
                        <div class="token__desc-title">General description</div>
                        <div class="token__desc-text">
                            <p>
                                SatsBB will be released on the basis of Ethereum platform and fully comply with ERC20* standard.
                            </p>
                            <p>
                                Support of this standard guarantees the compatibility of the token with third-party services (wallets, exchanges, listings, etc.), and provides easy integration.
                            </p>
                        </div>
                    </div>

                    <a href="" class="btn btn--medium">Buy Token</a>
                </div>
            </div>
        </div>
    </section>

    <section id="docs" class="docs">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div data-aos="fade-left" class="block-header block-header--animated">
                        <div class="subtitle subtitle--tire">Our files</div>
                        <h2 class="title title--medium title--black">Documents</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a href="" download class="doc" data-aos="fade-left" >
                        <div class="doc__name">
                            Terms & Conditions
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="" download class="doc" data-aos="fade-left" data-aos-delay="100">
                        <div class="doc__name">
                            White Pappers
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="" download class="doc" data-aos="fade-left" data-aos-delay="200">
                        <div class="doc__name">
                            Privacy Policy
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="" download class="doc" data-aos="fade-left" data-aos-delay="300">
                        <div class="doc__name">
                            Business Profile
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="advisors section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div data-aos="fade-up" class="block-header block-header--animated block-header--center">
                        <div class="subtitle">Family</div>
                        <h2 class="title title--medium title--black">Advisors</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href="#" class="advisor ln">
                        <div class="advisor__avatar"  data-aos="fade-up" >
                            <img src="img/advisorBg-1.svg" alt="" class="advisor__bg">
                            <img src="img/advisorImg-1.png" alt="" class="advisor__img">
                        </div>
                        <div class="advisor__name">David Drake</div>
                        <div class="advisor__post">CEO Capital Limited</div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#" class="advisor g"  data-aos="fade-up" data-aos-delay="200">
                        <div class="advisor__avatar">
                            <img src="img/advisorBg-2.svg" alt="" class="advisor__bg">
                            <img src="img/advisorImg-2.png" alt="" class="advisor__img">
                        </div>
                        <div class="advisor__name">Ann Balock</div>
                        <div class="advisor__post">Cryptonet Speaker</div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#" class="advisor fb" data-aos="fade-up" data-aos-delay="400">
                        <div class="advisor__avatar">
                            <img src="img/advisorBg-3.svg" alt="" class="advisor__bg">
                            <img src="img/advisorImg-3.png" alt="" class="advisor__img">
                        </div>
                        <div class="advisor__name">Vladimir Nikitin</div>
                        <div class="advisor__post">Cryptonet Team Lead</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div data-aos="fade-up" class="block-header block-header--animated">
                        <div class="subtitle subtitle--tire">Our brain</div>
                        <h2 class="title title--medium title--white">Awesome Team</h2>
                    </div>
                </div>
            </div>
            <div class="row team__list">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up">
                    <a href="" class="team-member fb">
                        <div class="team-member__avatar">
                            <img src="img/team-member-ava-1.png" alt="" class="team-member__avatar-img">
                        </div>
                        <div class="team-member__name">
                            David Drake
                        </div>
                        <div class="team-member__post">
                            UI Designer
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="" class="team-member g">
                        <div class="team-member__avatar">
                            <img src="img/team-member-ava-2.png" alt="" class="team-member__avatar-img">
                        </div>
                        <div class="team-member__name">
                            Allan Bellor
                        </div>
                        <div class="team-member__post">
                            Analitics
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="200">
                    <a href="" class="team-member ln" >
                        <div class="team-member__avatar">
                            <img src="img/team-member-ava-3.png" alt="" class="team-member__avatar-img">

                        </div>
                        <div class="team-member__name">
                            Joe Doe
                        </div>
                        <div class="team-member__post">
                            Tech Operation
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="300">
                    <a href="" class="team-member ln" >
                        <div class="team-member__avatar">
                            <img src="img/team-member-ava-4.png" alt="" class="team-member__avatar-img">
                        </div>
                        <div class="team-member__name">
                            Sam Tolder
                        </div>
                        <div class="team-member__post">
                            CEO
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="400">
                    <a href="" class="team-member ln">
                        <div class="team-member__avatar">
                            <img src="img/team-member-ava-5.png" alt="" class="team-member__avatar-img">
                        </div>
                        <div class="team-member__name">
                            Henry Polar
                        </div>
                        <div class="team-member__post">
                            SEO Specialist
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="500">
                    <a href="" class="team-member ln">
                        <div class="team-member__avatar">
                            <img src="img/team-member-ava-6.png" alt="" class="team-member__avatar-img">
                        </div>
                        <div class="team-member__name">
                            Sandra Pen
                        </div>
                        <div class="team-member__post">
                            Humar Resources
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="600">
                    <a href="" class="team-member ln">
                        <div class="team-member__avatar">
                            <img src="img/team-member-ava-7.png" alt="" class="team-member__avatar-img">
                        </div>
                        <div class="team-member__name">
                            Den Miller
                        </div>
                        <div class="team-member__post">
                            Economist
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="700">
                    <a href="" class="team-member ln">
                        <div class="team-member__avatar">
                            <img src="img/team-member-ava-8.png" alt="" class="team-member__avatar-img">
                        </div>
                        <div class="team-member__name">
                            Brawn Lee
                        </div>
                        <div class="team-member__post">
                            Journalist
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="800">
                    <a href="" class="team-member ln">
                        <div class="team-member__avatar">
                            <img src="img/team-member-ava-9.png" alt="" class="team-member__avatar-img">
                        </div>
                        <div class="team-member__name">
                            Linda Gampton
                        </div>
                        <div class="team-member__post">
                            UX Team Lead
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="900">
                    <a href="" class="team-member ln">
                        <div class="team-member__avatar">
                            <img src="img/team-member-ava-10.png" alt="" class="team-member__avatar-img">
                        </div>
                        <div class="team-member__name">
                            John Smith
                        </div>
                        <div class="team-member__post">
                            General Director
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="1000">
                    <a href="" class="team-member ln">
                        <div class="team-member__avatar">
                            <img src="img/team-member-ava-11.png" alt="" class="team-member__avatar-img">
                        </div>
                        <div class="team-member__name">
                            Sam Oldrich
                        </div>
                        <div class="team-member__post">
                            Manager
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="1100">
                    <a href="" class="team-member ln">
                        <div class="team-member__avatar">
                            <img src="img/team-member-ava-12.png" alt="" class="team-member__avatar-img">
                        </div>
                        <div class="team-member__name">
                            Denis Portlen
                        </div>
                        <div class="team-member__post">
                            Programmer
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="press section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="block-header block-header--animated block-header--center">
                        <div class="subtitle">Press About us</div>
                        <h2 class="title title--medium title--black">Press</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="press-carousel owl-carousel">
                        <div class="press-carousel__item">
                            <p>
                                “Support of this standard guarantees the compatibility of the token with third-party services (wallets, exchanges, listings, etc.), and provides easy integration”
                            </p>
                            <a href="" class="press-carousel__item-logo">
                                <img src="img/press-logo-1.png" alt="">
                            </a>

                        </div>
                        <div class="press-carousel__item">
                            <p>
                                “ River loach crocodile icefish ballan wrasse mooneye gray eel-catfish channel bass squirrelfish canary rockfish. Sea snail forehead brooder coho salmon, Black mackerel ”
                            </p>
                            <a href="" class="press-carousel__item-logo">
                                <img src="img/press-logo-2.png" alt="" class="press-carousel__item-logo">
                            </a>
                        </div>
                        <div class="press-carousel__item">
                            <p>
                                “Support of this standard guarantees the compatibility of the token with third-party services (wallets, exchanges, listings, etc.), and provides easy integration”
                            </p>
                            <a href="" class="press-carousel__item-logo">
                                <img src="img/press-logo-1.png" alt="">
                            </a>

                        </div>
                        <div class="press-carousel__item">
                            <p class="press-carousel__item-text">
                                “ River loach crocodile icefish ballan wrasse mooneye gray eel-catfish channel bass squirrelfish canary rockfish. Sea snail forehead brooder coho salmon, Black mackerel ”
                            </p>
                            <a href="" class="press-carousel__item-logo">
                                <img src="img/press-logo-2.png" alt="" class="press-carousel__item-logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="block-header block-header--animated block-header--center">
                        <div class="subtitle">In the world</div>
                        <h2 class="title title--medium title--black">Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="news-carousel owl-carousel">
                        <a href="" class="news-carousel__item">
                            <div class="news-carousel__item-subtitle">Cryptocurrency</div>
                            <h3 class="news-carousel__item-title">
                                New trends in UI/UX Design World Integration
                            </h3>
                            <p>
                                Specially for our VIP customers the LH Crypto team representatives Alexander Smirnov and Antonis Lapos will conduct a number of personal meet-
                            </p>
                            <div class="news-carousel__item-data">
                                September, 15 2017
                            </div>
                        </a>

                        <a href="" class="news-carousel__item">
                            <div class="news-carousel__item-subtitle">Bitcoin</div>
                            <h3 class="news-carousel__item-title">
                                The Crypto project has reached seven billions
                            </h3>
                            <p>
                                Specially for our VIP customers the LH Crypto team representatives Alexander Smirnov and Antonis Lapos will conduct a number of personal meet-
                            </p>
                            <div class="news-carousel__item-data">
                                September, 17 2017
                            </div>
                        </a>

                        <a href="" class="news-carousel__item">
                            <div class="news-carousel__item-subtitle">Blokchain</div>
                            <h3 class="news-carousel__item-title">
                                Start the redemption before the ICO completion
                            </h3>
                            <p>
                                Specially for our VIP customers the LH Crypto team representatives Alexander Smirnov and Antonis Lapos will conduct a number of personal meet-
                            </p>
                            <div class="news-carousel__item-data">
                                September, 15 2017
                            </div>
                        </a>

                        <a href="" class="news-carousel__item">
                            <div class="news-carousel__item-subtitle">Blokchain</div>
                            <h3 class="news-carousel__item-title">
                                Start the redemption before the ICO completion
                            </h3>
                            <p>
                                Specially for our VIP customers the LH Crypto team representatives Alexander Smirnov and Antonis Lapos will conduct a number of personal meet-
                            </p>
                            <div class="news-carousel__item-data">
                                September, 15 2017
                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="partners partners--bot-animation section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="block-header block-header--animated">
                        <div class="subtitle subtitle--tire">
                            Our friends
                        </div>
                        <h2 class="title title--medium title--black">
                            Partners
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col partners__logoes">
                    <div class="partners__logo">
                        <img src="img/partners-logo-1.png" alt="">
                    </div>
                    <div class="partners__logo">
                        <img src="img/partners-logo-2.png" alt="">
                    </div>
                    <div class="partners__logo">
                        <img src="img/partners-logo-3.png" alt="">
                    </div>
                    <div class="partners__logo">
                        <img src="img/partners-logo-4.png" alt="">
                    </div>
                    <div class="partners__logo">
                        <img src="img/partners-logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribe section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="block-header block-header--animated block-header--center">
                        <div class="subtitle">Newslatter</div>
                        <h2 class="title title--medium title--white">Subscribe</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form id="subscribe-bot" action="#" class="subscribe__form form">
                        <input type="email" name="subscribe_bot__email" placeholder="Email" class="form__input subscribe__form-input">
                        <button class="form__btn subscribe__form-btn">Send</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <ul class="social-list" ">
                    <li class="social-list__item">

                        <a href="" class="social-list__link">
                            <i class="fontello-icon icon-twitter">&#xf309;</i>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="" class="social-list__link">
                            <i class="fontello-icon icon-facebook">&#xf30c;</i>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="" class="social-list__link">
                            <i class="fontello-icon icon-telegram">&#xf2c6;</i>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="" class="social-list__link">
                            <i class="fontello-icon icon-bitcoin">&#xf15a;</i>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="" class="social-list__link">
                            <i class="fontello-icon icon-youtube-play">&#xf16a;</i>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer ">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 footer__block">
                    <a href="" class="logo">
                        <img class="logo__img--big" src="img/Logo_gradient.svg" alt="">
                    </a>

                    <div class="footer__text">
                        <p>523 Sylvan Ave, 5th Floor Mountain View, CA</p>
                        <p>+1 (234) 56789, +1 987 654 3210</p>
                        <p>info@SatsBB.com</p>
                        <p>supportcenter@SatsBB.com</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 offset-lg-1">
                    <ul class="footer-menu">
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link">About</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link">Services</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link">Road Map</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link">Statistic</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link">Token</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link">WhitePappers</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link">Team</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <ul class="footer__list">
                        <li class="footer__list-item">Whitepaper</li>
                        <li class="footer__list-item">Technical Paper</li>
                        <li class="footer__list-item">Business Summary</li>
                        <li class="footer__list-item">Brand Resources</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">
                    © 2023, SatsBB Theme by Artureanec
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>

<script src="js/scripts.min.js"></script>

</body>
</html>
