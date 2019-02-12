<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Qada</title>
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.14/css/uikit.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.14/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.14/js/uikit-icons.min.js"></script>
</head>
<body>
<nav class="uk-visible@s uk-navbar-container uk-margin  uk-navbar-transparent" uk-navbar>
    <div class="uk-navbar-center">

        <div class="uk-navbar-center-left">
            <div>
            <ul class="uk-navbar-nav">
                @guest

                                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
        @else

                <li>
                    <a href="#">Tambah</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="{{ route('solat.create') }}">Qadha Sholat</a></li>
                            <li><a href="#">Qadha Puasa</a></li>
                        </ul>
                    </div>
                </li> 
            <li><a href="{{ route('home') }}">Qadha</a></li>

        @endguest
            </ul>
        </div>
    </div>
        
        <a class="uk-navbar-item uk-logo" href="/">Ku Qadha</a>
        <div class="uk-navbar-center-right"><div>
            <ul class="uk-navbar-nav">
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div></div>

    </div>
</nav>
<div class="uk-margin-medium-bottom uk-preserve-color uk-navbar-container" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
    <button class=" uk-hidden@l uk-button" uk-navbar-toggle-icon  type="button" uk-toggle="target: #offcanvas-push" ></button><snap class="uk-hidden@l uk-text-large uk-margin-small-left uk-position-top-center uk-text-bold">KuQadha</snap>  
</div>

    <div class="uk-offcanvas-content">
 <div id="offcanvas-push" class="" uk-offcanvas="mode: push; overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>

            <h3>MENU</h3>

            <div class="uk-width-1-2@s uk-width-2-5@m">
    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav="multiple: true">
         @guest

                                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
        <li class="uk-active"><a href="{{ route('home') }}">{{ Auth::user()->name }}</a></li>
        @if(Auth::user()->Sholat)

        <li class="uk-parent">
            <a href="#">Qadha</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Sholat</a></li>
                <li>
                    <a href="#">Puasa</a>
                </li>
            </ul>
        </li>
        @endif
        <li class="uk-parent">
            <a href="#">Tambah</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Qadha Sholat</a></li>
                <li><a href="#">Qadha Puasa</a></li>
            </ul>
        </li>
                <li class="uk-active"><a class="uk-text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                                    @endguest

    </ul>
</div>

        </div>
    </div>



	            @yield('content')
</body>
</html>