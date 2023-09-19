@extends('layouts/agenda')


@section('tituloPagina', 'Eliminar categoria')


@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <h2 style="font-family: 'Poppins', sans-serif; font-weight:600; font-size:40px;"
                                class="text-center">Eliminar categoria</h2>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger" role="alert">
                                    Estas seguro de eliminar este registro?
                                    <p>Una vez eliminado no podra ser recuperado!</p>

                                    <table class="table table-sm">
                                        <thead>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $categorias->nombre }}</td>
                                                <td>{{ $categorias->descripcion }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <form action="{{ route('categorias.destroy', $categorias->id_categoria) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><span class="fas fa-trash-alt"></span> Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
