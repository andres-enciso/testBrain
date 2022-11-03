@extends('layout.base')

@section('title', 'Inicio')

@section('styles')
@parent
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection

@section('container')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Agencia de actividades</h2>
    </div>
</div>
<div class="ibox-content m-b-sm border-bottom mt-3">
    <div class="row center">
        <div class="col-sm-4">
            <div class="form-group">
                <label class="col-form-label" for="product_name">Fecha</label>
                <input type="date" class="form-control field" name="fecha" id="fecha" required>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="col-form-label" for="quantity">Número de personas</label>
                <input type="number" id="people" name="people" value="" placeholder="" class="form-control field" required>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="col-form-label" for="category">Categoria</label>
                <select class="form-control m-b" name="category" id="category" required>
                    <option value="0">Todo</option>
                    <option value="1">Parques</option>
                    <option value="2">Tours</option>
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            <button class="btn btn-primary btn-rounded" onclick="filtro()">Buscar</button>
        </div>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" id="cart_items">
        @foreach($actividades as $actividad)
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">
                    <div class="product-imitation">
                        {{$actividad->title}}
                    </div>
                    <input type="hidden" value="{{$actividad->id}}" id="id_p">
                    <div class="product-desc">
                        <span class="product-price">
                            {{$actividad->price}}
                        </span>
                        <small class="text-muted"> {{$actividad->category}}</small>
                        <a href="#" class="product-name"> {{$actividad->title}}</a>
                        <div class="small m-t-xs">
                            {{$actividad->description}}
                        </div>
                        <div class="m-t text-righ">
                            <button class="btn btn-xs btn-outline btn-primary" id="btn_comprar" value="{{$actividad->id}}" onclick="comprar(this.value)">Comprar </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('script')
@parent
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    $(document).ready(function() {

    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function filtro() {
        let wrapper_t = $("#cart_items");
        document.getElementById("cart_items").innerHTML = "";


        $.ajax({
            url: "{{route('ajax.filter')}}",
            type: "POST",
            data: {
                id_categoria: document.getElementById('category').value,
                _token: "{{csrf_token()}}"
            },
            success: function(data) {
                for (let i = 0; i < data.length; i++) {
                    console.log(data[i])
                    $(wrapper_t).append(`<div class='col-md-3'><div class='ibox'><div class='ibox-content product-box'><div class='product-imitation'>` + data[i].title + `</div><input type='hidden' value=' ` + data[i].id + ` ' id='id_p'><div class='product-desc'><span class='product-price'>` + data[i].price + `</span><small class='text-muted'> ` + data[i].category + `</small><a href='#' class='product-name'> ` + data[i].title + `</a><div class='small m-t-xs'>` + data[i].description + `</div><div class='m-t text-righ'><button class='btn btn-xs btn-outline btn-primary' id='btn_comprar' value='` + data[i].id + `' onclick='comprar(this.value)'>Comprar </button></div></div></div></div></div>`)
                }
            },
        });
    }

    function comprar(clicked_id) {
        fecha = document.getElementById("fecha").value;
        personas = document.getElementById("people").value;

        if (fecha == '' || personas == '') {
            Swal.fire({
                title: 'Fecha o cantidad de personas vacio',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })
        } else {
            $.ajax({
                url: "{{route('ajax.post')}}",
                type: "POST",
                data: {
                    id_actividad: clicked_id,
                    fecha: fecha,
                    personas: personas,
                    _token: "{{csrf_token()}}"
                },
                success: function(data) {
                    route = '{{route("detalle", ["id" => ":confirmacion"])}}';
                    route = route.replace(':confirmacion', data);
                    window.location.href = route;
                },

            });
        }
    }
</script>


@endsection
