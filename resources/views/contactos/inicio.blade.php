@extends('layouts/agenda')


@section('tituloPagina', 'Contactos')


@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 style="font-family: 'Poppins', sans-serif; font-weight:600; font-size:40px;">Contacto</h2>
                            <a href="{{ route('contactos.create') }}" class="btn btn-primary "> <span class="fas fa-user-plus"></span> Agregar nuevo contacto</a>
                            <hr>
                            @if ($mensaje = Session::get('success'))
                                <div class="alert alert-success" role="alert" style="margin-bottom: 10px">
                                    {{ $mensaje }}
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-sm table-bordered" id="tablaContactos">
                                    <thead>
                                        <th>Apellido paterno</th>
                                        <th>Apellido materno</th>
                                        <th>Nombre</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                        <th>Categoria</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </thead>
                                    @foreach ($listado as $item)
                                        <tbody>
                                            <tr>
                                                <td>{{ $item->paterno }}</td>
                                                <td>{{ $item->materno }}</td>
                                                <td>{{ $item->nombre }}</td>
                                                <td>{{ $item->telefono }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->nombre_categoria }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('contactos.edit', $item->id_contacto) }}"
                                                        class="btn btn-warning btn-sm"><span class="fas fa-user-edit"></span></a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('contactos.show', $item->id_contacto) }}"
                                                        class="btn btn-danger btn-sm"> <span class="fas fa-trash-alt"></span></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('dataTable')
<script>
    $(document).ready(function(){
        $('#tablaContactos').DataTable();
    })
</script>
@endsection

