@extends('menu')

@section('contenido')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Detalles de Medicamento</h3>
                    <small>En esta seccion se muestra la informacion detallada de un medicamento.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                @foreach ($orm as $m)
                    <div class="blog-single">
                        <div class="blog-box blog-details">
                            <div class="row justify-content-center">
                                <img src="{{ asset($m->med_image) }}" class="img-fluid" alt="blog-main">
                            </div>
                            <div class="blog-details">
                                <h4>{{ $m->med_name }}</h4>
                                <small>Principios Activos: {{ $m->med_actives_components }}</small><br>
                                <small>Clasificacion: <a href="{{ route('categories.show', $m->cat_id) }}">{{ $m->cat_name }}</a></small>
                                <div class="single-blog-content-top">
                                <p>{{ $m->med_description }}</p>
                                <br>
                                <h5>Indicaciones</h5>
                                <p>{{ $m->med_indications }}</p>
                                <br>
                                <h5>Contraindicaciones</h5>
                                <p>{{ $m->med_contraindications }}</p>
                                <br>
                                <h5>Reacciones Adversas</h5>
                                <p>{{ $m->med_adverse_reactions }}</p>
                                <br>
                                <h5>Dosificacion</h5>
                                <p>{{ $m->med_dosage }}</p>
                                <br>
                                <h5>Farmacocinetica</h5>
                                <p>{{$m->med_pharmacokinetics }}</p>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection