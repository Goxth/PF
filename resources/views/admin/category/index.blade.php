@extends('admin.layout.admin')
@section('content')
<div class="navbar">
    <h2 class="navbar-brand"> Categorías</h2>
    <ul class="nav navbar-nav">
        @if(!empty($categories))
        @forelse($categories as $category)
        <li class="active">
            <a href="{{route('category.show',$category->id)}}">{{$category->name}}</a>
            {{-- delete button --}}
            <form action="{{route('category.destroy',$category->id)}}"  method="POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
            </form>
        </li>
        @empty
        <li>No hay catergorias disponibles</li>
        @endforelse
        @endif
    </ul>
    <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Añadir Categoría</a>
    <div class="modal fade" id="category">
        <div class="modal-dialog">
            <div class="modal-content" style="background:#3d4044;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Añadir nueva</h4>
                </div>
                {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Title') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Ok</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@if(isset($products))
<h3>Products</h3>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Products</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
        <tr>
            <td>{{$product->name}}</td>
        </tr>
        @empty
        <tr>
            <td>no data</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endif
@endsection
    
    