@extends('menu')

@section('contenido')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Agregar Clasificacion</h3>
                    <small>En esta seccion se agregan nuevas categorias de medicamentos.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" id="form_add_cat">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="cat_name"><b>Nombre de Clasificación</b></label>
                                    <input type="text" name="cat_name" id="cat_name" class="form-control">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection