@extends('admin.layout.admin')
@section('content')
<h3>Ordenes</h3>
<hr>
<ul style="list-style: none;">
    @foreach($ordens as $orden)
    <li>
        <h4>Orden por {{$orden->user->name}} <br> Precio Total Bsf: {{$orden->total}}</h4>
        <form action="{{route('toggle.deliver',$orden->id)}}" method="POST" class="pull-right" id="deliver-toggle">
            {{csrf_field()}}
            <label for="delivered">Delivered</label>
            <input type="checkbox" value="1" name="delivered"{{$orden->delivered==1?"checked":"" }}>
            <input type="submit" value="Submit" class="btn btn-success">
        </form>
        <div class="clearfix"></div>
        <hr>
        <h5>Items</h5>
        <table class="table table-bordered">
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            @foreach($orden->orderItems as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->pivot->qty}}</td>
                <td>Bsf: {{$item->pivot->total}}</td>
            </tr>
            @endforeach
        </table>
    </li>
    @endforeach
</ul>
@endsection