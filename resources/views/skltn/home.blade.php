@extends('layouts.main')
@section('content')
<div id="carousel-example-generic2" class="carousel slide carousel-fullscreen carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image: url('https://uberflip.cdntwrk.com/files/aHViPTMwMzUwJmNtZD1pdGVtZWRpdG9yaW1hZ2UmZmlsZW5hbWU9aXRlbWVkaXRvcmltYWdlXzU4MmM4MDM4OTM1ZGIuanBnJnZlcnNpb249MDAwMCZzaWc9MDc2ZmQ4OTgxODY1Yjc2MjgwNWY0NTVlZWUwNDQ2Yzc%253D');">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <h1 class="super-heading">Bienvenido a EZ|Shop</h1>
                <p class="super-paragraph">Realize su compra con pocos pasos.</p>
            </div>
        </div>
        <div class="item" style="background-image: url('http://sungistix.com/wp-content/uploads/2016/12/ecommerce-strategies.jpg');">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <h1 class="super-heading">Lorem ipsum dolor color</h1>
                <p class="super-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="item" style="background-image: url('http://www.camaltecservicios.com/wp-content/uploads/2017/01/Enemigos-del-Ecommerce.jpg');">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <h1 class="super-heading">Lorem ipsum dolor color</h1>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
</div>
<br/>
<div class="container-fluid">
    <div class="subheader text-center">
        <h2>
            Últimos Artículos
        </h2>
    </div>
    <div class="row">
        @forelse($tienda->chunk(4) as $chunk)
        @foreach($chunk as $item)
        <div class="small-3 medium-3 large-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="{{route('cart.addItem',$item->id)}}" class="button expanded add-to-cart">
                    Add to Cart
                    </a>
                    <a href="#">
                    <img src="{{url('images',$item->image)}}"/>
                    </a>
                </div>
                <a href="{{route('item')}}">
                    <h3>
                        {{$item->name}}
                    </h3>
                </a>
                <h5>
                    Bsf {{$item->price}}
                </h5>
                <p>
                    {{$item->description}}
                </p>
            </div>
        </div>
        @endforeach
        @empty
        <h3>No hay Articulos</h3>
        @endforelse
    </div>
    <br>
</div>
@endsection