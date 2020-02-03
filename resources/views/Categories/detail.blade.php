@extends('menu')

@section('contenido')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Detalles de Clasificacion</h3>
                    <small>En esta seccion se muestra la informacion detallada de una categoria junto a los medicamentos que posee.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="blog-single">
                    <div class="blog-box blog-details">
                        <div class="blog-details">
                            <hr>
                            <h4>{{ $orc->cat_name }}</h4>
                            <hr>
                                <div class="alert alert-info" id="alert"></div>
                                <div class="row">
                                    @foreach ($orm as $m)
                                        <div class="col-md-6 col-xl-3">
                                            <div class="card">
                                                <div class="blog-box blog-grid text-center">
                                                    <img src="{{ asset($m->med_image) }}" class="img-fluid top-radius-blog" height="50" width="50" alt="">
                                                    <div class="blog-details-main">
                                                        <hr>
                                                        <h6 class="blog-bottom-details">{{$m->med_name}}</h6>
                                                        <hr>
                                                        {!! Form::open(['route' => ['medicines.destroy',$m->id],'method' => 'DELETE']) !!}
                                                            <ul class="blog-social">
                                                                <li>
                                                                    <a href="#" class="btn-delete-med" title="Borrar"><i class="icofont icofont-ui-close"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('medicines.edit', $m->id) }}" title="Actualizar Informacion"><i class="icofont icofont-loop"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('medicines.show', $m->id) }}"><i class="icofont icofont-open-eye" title="Ver Detalles"></i></a>
                                                                </li>
                                                            </ul>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row justify-content-center">
                                    {{ $orm->links() }}
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection