@extends('admin.layout.admin')
@section('content')
<h3>Productos</h3>
<ul class="container" style="list-style: none;">
    @forelse($products as $product)
    <li class="row">
        <div class="col-md-8" style="border:3px solid #3f3d3d; width:50%; justify-content: center; text-align: center; position:relative; left:140px; margin:10px; background:#494342;">
        <h4>Nombre del producto: {{$product->name}}</h4>
        <h4>Categoría: {{count($product->category)?$product->category->name:"N/A"}}</h4>
        <h4>Bsf: {{$product->price}}</h4>
        <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-sm ">Editar Producto</a>
        <br>
        @foreach ($product->images as $image)
        <img src="{{$image->image_path}}" style="max-width: 100px">
        @endforeach
        <form action="{{route('product.destroy',$product->id)}}"  method="POST">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input class="btn btn-sm btn-danger" type="submit" value="Borrar">
        </form>
        <br>
        <br>
        <h4>Agregar imagen</h4> 
        <div class="col-md-6" style="position:relative; left:210px; margin-bottom:5px;">
            <form style="width:100px; height:50px;" action="/admin/product/image-upload/{{$product->id}}" method="POST" class="dropzone" id="my-awesome-dropzone-{{$product->id}}">
                {{csrf_field()}}
            </form>
        </div>
    </li>
    @empty
    <h3>No hay productos</h3>
    @endforelse
</ul>
@endsection