<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}" />

        <title>chikavi's</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                filter:brightness(.95); 
                background-image: url('img/alcohol.jpg');
                background-size: cover;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 100px;
                font-weight: bold;
                color:white;
                text-shadow: -4px 0 #14202f, 0 4px #14202f, 4px 0 #14202f, 0 -4px #14202f;
            }
            .slogan{
                 color:white;
                text-shadow: -3px 0 #17202f, 0 3px #17202f, 3px 0 #17202f, 0 -3px #17202f;
            }
            .links > a {
                color: white;
                filter:brightness(1);
                padding: 0 25px;
                font-size: 13px;
                
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
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    CHIKAVI'S
                </div>
            <h1 class="slogan">Cervezas más frias que el corazón de tu ex</h1>
                
            </div>
        </div>
    </body>
</html>
