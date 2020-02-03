@extends('menu')

@section('contenido')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Listado de Clasificaciones de Medicamentos</h3>
                    <small>En esta seccion se muestra un listado de las clasificaciones de medicamentos.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-info" id="alert"></div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Cantidad de Medicamentos</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orc as $c)
                                        <tr>
                                            <td>{{$c->cat_name}}</td>
                                            <td>2</td>
                                            <td>
                                                {!! Form::open(['route' => ['categories.destroy',$c->id],'method' => 'DELETE']) !!}
                                                <a href="#" class="btn-delete-cat" title="Borrar"><i class="icofont icofont-ui-close"></i></a>
                                                <a href="{{ route('categories.edit', $c->id) }}"><i class="icofont icofont-loop" title="Actualizar Informacion"></i></a>
                                                <a href="{{ route('categories.show', $c->id) }}"><i class="icofont icofont-open-eye" title="Ver Detalles"></i></a>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection