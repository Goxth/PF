@extends('layouts.main')
@section('content')
<div class="row">
    @forelse($tienda as $item)
    <div class="small-3 medium-3 large-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a href="{{route('cart.addItem',$item->id)}}" class="button expanded add-to-cart">
                Añadir al carro
                </a>
                <a href="#">
                <img src="{{url('images',$item->image)}}"/>
                </a>
            </div>
            <a href="">
                <h3>
                    {{$item->name}}
                </h3>
            </a>
            <h5>
                ${{$item->price}}
            </h5>
            <p>
                {{$item->description}}
            </p>
        </div>
    </div>
    @empty
    <h3>No hay Artículos ):</h3>
    @endforelse
</div>
@stop