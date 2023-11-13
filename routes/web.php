<?php

use Illuminate\Support\Facades\Route;
use App\Models\Alumnos;
use App\Http\Controllers\EjemploClase;
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
Route::get('/obtenerAlumnos', [EjemploClase::class, 'dameAlumnos']);
