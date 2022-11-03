<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Test extends Controller
{

    public function Inicio(Request $request)
    {

        $vars = [
            'actividades' =>  Products::select('products.*', 'category.category')->join('category', 'products.id_category', '=', 'category.id')->get()
        ];

        return view('inicio', $vars);
    }


    public static function getFilter(Request $request)
    {
        $categoria = $request->id_categoria;

        if ($categoria != 0) {
            return  Response()->json(Products::select('products.*', 'category.category')->where('products.id_category', $categoria)->join('category', 'products.id_category', '=', 'category.id')->OrderBy('qualification', 'desc')->get());
        } else {
            return  Response()->json(Products::select('products.*', 'category.category')->join('category', 'products.id_category', '=', 'category.id')->OrderBy('qualification', 'desc')->get());
        }
    }

    public static function postActividad(Request $request)
    {

        $actividad = $request->id_actividad;

        $fecha = $request->fecha;
        $personas = $request->personas;

        //Esta query la estoy obteniedo asi porque meh, puedo manejar los datos de cualquier manera
        $act = DB::table('products')->where('id', $actividad)->first();

        $last = Checkout::insertGetId([
            'id_products' => $actividad,
            'people' => $personas,
            'price' => $act->price * $personas,
            'reservation_date' => $fecha,
        ]);

        return $last;
    }

    public function getConfirmacion($id)
    {

        $vars = [
            'confirmacion' =>  Checkout::getConfirmacion($id)
        ];
        return view('detalle', $vars);
    }
}
