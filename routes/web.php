<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
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

Route::get('/', function () {
    return view('vistas.vistacero');
});
Route::get('/uno', function () {
    return view('vistas.vistauno');
});
Route::get('/dos', function () {
    return view('vistas.vistados');
});
Route::get('/tres/{nom}', function ($nom) {
    return '<h1>Hola , el nombre ingresado es : '.$nom.'</h1>';

});

/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/empleado', function () {
    return view('empleado.index');
});
Route::get('empleado/create',[EmpleadoController::class,'create']);
*/
Route::resource('empleado',EmpleadoController::class);

