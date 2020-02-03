@extends('menu')

@section('contenido')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Actualizar Medicamento</h3>
                    <small>En esta seccion se puede actualizar la informacion de un medicamento.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        {!! Form::open(['route' => ['medicines.update',$orm->id],'method' => 'PUT','id' => 'form_update_med','files' => true]) !!}
                            <div class="row">
                                <div class="col">
                                    <label for="med_name"><b>Nombre de Medicamento</b></label>
                                <input type="text" name="med_name" id="med_name" class="form-control" value="{{ $orm->med_name }}">
                                </div>
                                <div class="col">
                                    <label for="med_pharmaceutical_form"><b>Forma Farmaceutica</b></label>
                                    <select name="med_pharmaceutical_form" id="med_pharmaceutical_form" class="form-control">
                                        <option value="">Seleccione...</option>
                                        <option value="Sólida" @php echo ($orm->med_pharmaceutical_form === "Sólida") ? "selected" : "" @endphp>Sólida</option>
                                        <option value="Semisólida" @php echo ($orm->med_pharmaceutical_form === "Semisólida") ? "selected" : "" @endphp>Semisólida</option>
                                        <option value="Líquida" @php echo ($orm->med_pharmaceutical_form === "Líquida") ? "selected" : "" @endphp>Líquida</option>
                                        <option value="Gaseosa" @php echo ($orm->med_pharmaceutical_form === "Gaseosa") ? "selected" : "" @endphp>Gaseosa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_image"><b>Imagen (640x600px)</b></label>
                                    <input type="file" name="med_image" id="med_image" class="form-control" accept="image/*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_actives_components"><b>Principios Activos</b></label>
                                    <input type="text" name="med_actives_components" id="med_actives_components" class="form-control" value="{{ $orm->med_actives_components }}">
                                </div>
                                <div class="col">
                                    <label for="categories_cat_id"><b>Categoria de Medicamentos</b></label>
                                    <select name="categories_cat_id" id="categories_cat_id" class="form-control">
                                        <option value="">Seleccione...</option>
                                        @foreach ($orc as $c)
                                            <option value="{{ $c->id }}" {{ ($c->id === $orm->categories_cat_id) ? "selected": "" }}>{{ $c->cat_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_description"><b>Descripcion</b></label>
                                    <textarea name="med_description" id="med_description" cols="30" rows="5" class="form-control">{{ $orm->med_description }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_indications"><b>Indicaciones</b></label>
                                    <textarea name="med_indications" id="med_indications" cols="30" rows="5" class="form-control">{{ $orm->med_indications }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_contraindications"><b>Contraidicaciones</b></label>
                                    <textarea name="med_contraindications" id="med_contraindications" cols="30" rows="5" class="form-control">{{ $orm->med_contraindications }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_dosage"><b>Dosificacion</b></label>
                                    <textarea name="med_dosage" id="med_dosage" cols="30" rows="5" class="form-control">{{ $orm->med_dosage }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_adverse_reactions"><b>Reacciones Adversas</b></label>
                                    <textarea name="med_adverse_reactions" id="med_adverse_reactions" cols="30" rows="5" class="form-control">{{ $orm->med_adverse_reactions }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="med_pharmacokinetics"><b>Farmacocineta</b></label>
                                    <textarea name="med_pharmacokinetics" id="med_pharmacokinetics" cols="30" rows="5" class="form-control">{{ $orm->med_pharmacokinetics }}</textarea>
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
                                <button type="submit" class="btn btn-primary-gradien">Actualizar</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection