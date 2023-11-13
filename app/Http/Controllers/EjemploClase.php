<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;

class EjemploClase extends Controller
{
    public function dameAlumnos(){
        return Alumnos::obtenerTodos();
    }
}
