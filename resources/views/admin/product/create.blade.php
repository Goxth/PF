@extends('admin.layout.admin')
@section('content')
<h3>Añade un producto</h3>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
        <div class="form-group">
            {{ Form::label('name', 'Nombre') }}
            {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Descripcion') }}
            {{ Form::text('description', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('price', 'Precio') }}
            {{ Form::text('price', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('category_id', 'Categoría') }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Selecciona la Categoría']) }}
        </div>
        <div class="form-group">
            {{ Form::label('image', 'Imagen') }}
            {{ Form::file('image',array('class' => 'form-control')) }}
        </div>
        {{ Form::submit('Crear', array('class' => 'btn btn-success')) }}
        {!! Form::close() !!}
    </div>
</div>
@endsection