<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [Test::class, "Inicio"])->name("inicio");

Route::post("/filter", [Test::class, "getFilter"])->name("ajax.filter");

Route::post("/products", [Test::class, "postActividad"])->name("ajax.post");

Route::get("confirmacion/{id}", [Test::class, "getConfirmacion"])->name("detalle");

/*
Route::get('/', function () {
    return view('welcome');
});
*/
