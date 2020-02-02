@extends('menu')

@section('contenido')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Agregar Medicamento</h3>
                    <small>En esta seccion se agregan nuevos medicamentos.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        {!! Form::open(['route' => ['medicines.store'],'method' => 'POST','id' => 'form_add_med','files' => true]) !!}
                            <div class="row">
                                <div class="col">
                                    <label for="med_name"><b>Nombre de Medicamento</b></label>
                                    <input type="text" name="med_name" id="med_name" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="med_pharmaceutical_form"><b>Forma Farmaceutica</b></label>
                                    <select name="med_pharmaceutical_form" id="med_pharmaceutical_form" class="form-control">
                                        <option value="">Seleccione...</option>
                                        <option value="Sólida">Sólida</option>
                                        <option value="Semisólida">Semisólida</option>
                                        <option value="Líquida">Líquida</option>
                                        <option value="Gaseosa">Gaseosa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_image"><b>Imagen</b></label>
                                    <input type="file" name="med_image" id="med_image" class="form-control" accept="image/*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_actives_components"><b>Principios Activos</b></label>
                                    <input type="text" name="med_actives_components" id="med_actives_components" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="categories_cat_id"><b>Categoria de Medicamentos</b></label>
                                    <select name="categories_cat_id" id="categories_cat_id" class="form-control">
                                        <option value="">Seleccione...</option>
                                        @foreach ($orc as $c)
                                            <option value="{{ $c->id }}">{{ $c->cat_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_description"><b>Descripcion</b></label>
                                    <textarea name="med_description" id="med_description" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_indications"><b>Indicaciones</b></label>
                                    <textarea name="med_indications" id="med_indications" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_dosage"><b>Dosificacion</b></label>
                                    <textarea name="med_dosage" id="med_dosage" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_adverse_reactions"><b>Reacciones Adversas</b></label>
                                    <textarea name="med_adverse_reactions" id="med_adverse_reactions" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_pharmacokinetics"><b>Farmacocineta</b></label>
                                    <textarea name="med_pharmacokinetics" id="med_pharmacokinetics" cols="30" rows="5" class="form-control"></textarea>
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