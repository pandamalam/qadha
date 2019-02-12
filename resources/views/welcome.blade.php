<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Qada</title>
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.14/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.14/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.14/js/uikit-icons.min.js"></script>
<style type="text/css">
            html, body {
    background-image: url("https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/BuKKyFq/videoblocks-islamic-background-with-modern-mosque-silhouette-looped-animation_rnhw7zp1b_thumbnail-full01.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: right bottom; 
background-size: cover; 
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
</style>
</head>
<body>
    <div class="uk-position-top-center uk-margin-large-top"><h2 class="uk-heading-line">QADHA APPLICATION</h2><p class="uk-text-small uk-text-center">By Lutfi Haridha</p></div>
    
<div class="uk-container uk-position-center uk-container-small">

                @if (Route::has('login'))
                    @auth
                        <a class="uk-margin-bottom uk-button uk-button-primary uk-width-1-1@m" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
    <a class="uk-button uk-margin-bottom uk-button-secondary uk-margin-right uk-width-1-1@m" href="qadhasolat">Qadha Solat</a>
    <a class="uk-button uk-margin-bottom uk-button-secondary uk-width-1-1@m" href="#">Qadha Puasa</a><br>
     <a class="uk-button uk-button-danger uk-width-1-1@m" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    @else
    <a class="uk-button uk-button-secondary uk-margin-right" href="{{ route('login') }}">Login</a>
    <a class="uk-button uk-button-secondary" href="{{ route('register') }}">Register</a>
    @endauth
            @endif


</div>

</body>
</html>