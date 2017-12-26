@extends('layouts.main')
@section('content')
<h3>Delivery</h3>
<div class="row">
    <br>
    <br>
    <br>
    <div class="small-6 small-centered columns">
        {!! Form::open(['route' => 'direccion.store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('direccion', 'Direccion') }}
            {{ Form::text('direccion', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('telefono', 'Numero de Telefono') }}
            {{ Form::text('telefono', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('cel', 'Numero de Celular') }}
            {{ Form::text('cel', null, array('class' => 'form-control')) }}
        </div>
        {{ form::submit('Ir al Pago', array('class' => 'button success')) }}
    </div>
</div>
@endsection
