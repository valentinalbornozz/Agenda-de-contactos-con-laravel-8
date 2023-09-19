@extends('layouts/agenda')


@section('tituloPagina', 'Agregar categoria')


@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <h2 style="font-family: 'Poppins', sans-serif; font-weight:600; font-size:40px;"
                                class="text-center">Agregar nueva categoria</h2>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{ route('categorias.store') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    <label for="descripcion">Descripción</label>
                                    <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control"></textarea>
                                    <br>
                                    <button class="btn btn-primary"> <span class="fa-solid fa-plus"></span> Agregar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
