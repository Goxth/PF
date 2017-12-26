<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>
            @yield('title','EZ|Shop')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="{{asset('landing/css/caro.css')}}">
        <link rel="stylesheet" href="{{asset('arch/css/foundation.css')}}" />
        <link rel="stylesheet" href="{{asset('arch/css/app.css')}}" />
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <header>
            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type=button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav1">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a href="{{route('home')}}" class="navbar-brand">EZ|Shop</a>
                    </div>
                    <div class="collapse navbar-collapse" id="nav1">
                        <ul class="nav navbar-nav navbar-right" role="tablist">
                            <li style="font-weight: bold;" class="sigh">
                                <a href="{{route('contact')}}">
                                Contacto
                                </a>
                            </li>
                            <li>
                                <a href="{{route('cart.index')}}">
                                <i class="fa fa-shopping-cart " aria-hidden="true">
                                </i>
                                <strong>Carrito</strong>
                                <span class="alert badge">
                                {{Cart::count()}}
                                </span>
                                </a>
                            </li>
                             @if (Auth::check())
                            <li style="color:white; font-weight: bold;" class="sigh">
                                
                                 <a href="">Bienvenido, {{Auth::user()->name}}</a>
                            </li>
                            <li style="font-weight: bold;" class="sigh">
                                <a href="{{url('/logout')}}">Desconectar</a>
                            </li>
                            @else
                            <li style="color:white; font-weight: bold;" class="sigh">
                                <a href="">Bienvenido, Visitante.</a>
                            </li>
                            <li style="font-weight: bold;" class="sigh">   
                                <a href="{{ url('/login') }}">Entrar</a>
                            </li>
                            <li style="font-weight: bold;" class="sigh">    
                                <a href="{{ url('/register') }}">Registrarse</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>    
            </nav>
        </header>
        </div>   
        @yield('content')
        <footer class="footer-distributed">
            <div class="footer-right">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
            <div class="footer-left">
                <p class="footer-links">
                    <a href="#">Home</a> ·
                    <a href="#">Tienda</a> ·
                    <a href="#">Acerca de</a> ·
                    <a href="{{route('contact')}}">Contacto</a>
                </p>
                <p>EZ|Shop &copy; 2017</p>
            </div>
        </footer>
        <script src="{{asset('arch/js/vendor/jquery.js')}}"></script>
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <script type="text/javascript" src="{{asset('landing/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript">
        Stripe.setPublishableKey('pk_test_SJxcO9bzPQMvD27YMU20Frzc');
        </script>
        <script src="{{asset('arch/js/app.js')}}"></script>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
