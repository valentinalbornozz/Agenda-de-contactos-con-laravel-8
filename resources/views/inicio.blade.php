@extends('layouts/agenda')


@section('tituloPagina', 'Inicio')


@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 text-center" >
                            <h2 style="font-family: 'Poppins', sans-serif; font-weight:600; font-size:40px;">Esta es una agenda sencilla con laravel 8</h2>
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <img src="{{ asset('img/agenda contacto.jpg') }}" alt="" width="70%">
                                <p style="font-family: 'Poppins', sans-serif; font-weight:400; font-size:30px;">
                                    Esta es mi primera agenda con laravel
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
