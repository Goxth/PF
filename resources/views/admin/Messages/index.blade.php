@extends('admin.layout.admin')
@section('content')
<h3>Mensajes</h3>
<hr>
<div class="container" style="width:100%;">
    <ul style="list-style: none;">
        @foreach($messages as $message)
        <li>
            <h4>Mensaje de  {{$message->nombre}}</h4>
            <form action="" method="POST" id="deliver-toggle">
                {{csrf_field()}}
            </form>
            <hr>
            <table class="table table-bordered">
                <tr>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Mensaje</th>
                </tr>
                <tr>
                    <td>{{$message->email}}</td>
                    <td>{{$message->telefono}}</td>
                    <td>{{$message->textarea}}</td>
                </tr>
            </table>
            <form action="{{route('messages.destroy',$message->id)}}"  method="POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input class="btn btn-sm btn-danger" type="submit" value="Borrar">
            </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection('')