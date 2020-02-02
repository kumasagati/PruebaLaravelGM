@extends('menu')

@section('contenido')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Actualizar Clasificacion</h3>
                    <small>En esta seccion se puede actualizar la informacion de una clasificacion de medicamentos.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        {!! Form::open(['route' => ['categories.update',$orc->id],'method' => 'PUT','id' => 'form_update_cat']) !!}
                            <div class="row">
                                <div class="col">
                                    <label for="cat_name"><b>Nombre de Clasificación</b></label>
                                    <input type="text" name="cat_name" id="cat_name" class="form-control" value="{{$orc->cat_name}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <div id="validation_results"></div>
                                </div>
                            </div>
                            <br>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary-gradien">Agregar</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection