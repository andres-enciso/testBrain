@extends('layout.base')

@section('title', 'Oficios')

@section('styles')
@parent

@endsection

@section('container')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Detalle de la actividad</h2>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        <div class="col-lg-12">

            <div class="ibox product-detail">
                <div class="ibox-content">

                    <div class="row">
                        <div class="col-md-5">
                            <div class="product-images slick-initialized slick-slider" role="toolbar">
                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" role="listbox" style="opacity: 1; width: 1190px; transform: translate3d(-238px, 0px, 0px);">
                                        <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" role="option" aria-describedby="slick-slide00" style="width: 238px;">
                                            <div class="image-imitation">
                                                [IMAGE 1]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">

                            <h2 class="font-bold m-b-xs">
                                {{$confirmacion->title}}
                            </h2>
                            <small>{{$confirmacion->description}}</small>
                            <div class="m-t-md">
                                <h2 class="product-main-price">{{$confirmacion->price}} <small class="text-muted">iva no incluido</small> </h2>
                            </div>
                            <hr>

                            <h4>Descripcion completa</h4>

                            <div class="small text-muted">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga itaque accusantium corporis laboriosam necessitatibus, ducimus minima aliquid iste fugit? Ipsam est suscipit facere! Veniam dolorum quia aspernatur voluptatem iste atque.
                            </div>
                            <dl class="small m-t-md">
                                <dt>Cantidad de personas</dt>
                                <dd>{{$confirmacion->people}}</dd>
                                <dt>Precio por persona</dt>
                                <dd>{{$confirmacion->price_u}}</dd>
                                <dt>Fecha</dt>
                                <dd>{{$confirmacion->reservation_date}}</dd>
                            </dl>
                            <hr>

                            <div>
                                <div class="btn-group">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i> Pagar</button>
                                    <button class="btn btn-white btn-sm"><i class="fa fa-star"></i> Contactar a un asesor </button>

                                        <button class="btn btn-white btn-sm"><a href="{{route('inicio')}}">Volver al inicio </a> </button>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

@endsection
