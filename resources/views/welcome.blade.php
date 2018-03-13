<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Danmaker</title>

        <link rel="shortcut icon" href="{{asset('/images/instagram.png')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="{{asset('https://image.noelshack.com/fichiers/2018/11/2/1520976609-gg.jpg')}}" width="150px" height="150">
                        Frites au Caribou
                    <img src="{{asset('https://d2homsd77vx6d2.cloudfront.net/cache/7/9/0ca70fffe05fcd99f8768e6cb14dd2.jpg')}}" width="150px" height="150">
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Dis donc</a>
                    <a href="https://laracasts.com">y a du boulot</a>
                    <a href="https://laravel-news.com">sur ce site.</a>
                    <a href="https://forge.laravel.com">Faudrait penser à</a>
                    <a href="https://github.com/laravel/laravel">s'y mettre!</a>
                </div>
            </div>
        </div>
    </body>
</html><!doctype html>
