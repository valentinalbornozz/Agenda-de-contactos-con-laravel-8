@extends('layouts/agenda')


@section('tituloPagina', 'Editar categoria')


@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <h2 style="font-family: 'Poppins', sans-serif; font-weight:600; font-size:40px;"
                                class="text-center">Editar categoria</h2>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{ route('categorias.update', $categorias->id_categoria) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required
                                        value="{{ $categorias->nombre }}">
                                    <label for="descripcion">Descripción</label>
                                    <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control" >{{ $categorias->descripcion }}</textarea>
                                    <br>
                                    <button class="btn btn-warning"> <span class="fas fa-edit"></span> Actualizar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
