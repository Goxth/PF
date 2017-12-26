@extends('layouts.main')
@section('content')
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="small-6 small-centered columns">
                <h4><strong>Contactate con nosotros</strong></h4>
                <form action=" {{ route ('message.store') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" value="" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" value="" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="telefono" value="" placeholder="Telefono">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="textarea" rows="3" placeholder="Escriba su mensaje"></textarea>
                    </div>
                    <button class="btn btn-default" type="submit" name="button">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i> Enviar
                    </button>
                </form>
            </div>
            <br>
            <div class="small-6 small-centered columns">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.907407217851!2d-71.62041958601289!3d10.66429486417147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8998e222fb0efd%3A0xbd29bf2de2e9189a!2s4geeks+Mcbo!5e0!3m2!1ses-419!2sve!4v1513882944295" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
@endsection