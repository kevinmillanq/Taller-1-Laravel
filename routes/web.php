<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludoht', function () {
    return view('saludoht');
});

Route::get('/multiplicar/{num1}/{num2}',[OperacionesController::class,'multiplicar']);
Route::get('/dividir/{num1}/{num2}',[OperacionesController::class,'dividir']);
Route::get('/cuadratica/{a}/{b}/{c}',[OperacionesController::class,'cuadratica']);
Route::get('/areaTriangulo/{a}/{b}/{c}',[OperacionesController::class,'areaTriangulo']);
Route::get('/areaCirculo/{a}',[OperacionesController::class,'areaCirculo']);
Route::get('/factorial/{num}',[OperacionesController::class,'factorial']);
Route::get('/primo/{num}',[OperacionesController::class,'primo']);
Route::get('/amigos/{num1}/{num2}',[OperacionesController::class,'amigos']);