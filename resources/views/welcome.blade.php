<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('landing/css/estilos.css')}}">
        <link rel="stylesheet" type="" href="{{asset('landing/css/bootstrap.min.css')}}">
        <!-- Styles -->
    </head>
    <body>
        <div class="container">
            <div class="tx">
                <h2 style="color:#4f5359;"><strong> EZ | Shop la forma más rápida y segura de comprar por Internet.</strong> </h2>
                @if (Route::has('login'))
                <div class="botones">
                    @if (Auth::check())
                    @else
                    <a class="btn btn-default uno " href="{{url('/login')}}"><strong>Entra</strong></a>
                    <a class="btn btn-default dos" type="button" href="{{url('/register')}}"><strong>Regístrate</strong></a>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </body>
</html>