@extends('layouts.main')
@section('content')
<h3>Carrito</h3>
<br>
<br>
<br>
<div class="row">
<table class="table table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($cartItems as $cartItem)
        <tr>
            <td>{{$cartItem->name}}</td>
            <td>{{$cartItem->price}}</td>
            <td width="50px">
                {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                <input type="text" name="qty" value="{{$cartItem->qty}}">
            </td>
            <td>
            </td>
            <td>
                <input style="float: left"  type="submit" class="button success small" value="Actualizar">
                {!! Form::close() !!}
                <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input class="button small alert" type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td></td>
            <td>
                Total a pagar: Bsf {{Cart::total()}}
            </td>
            <td>Productos: {{Cart::count()}}
            </td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
<a href="{{route('checkout.shipping')}}" class="button">Ordenar</a>
</div>
@endsection