<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alumno;

class AlumnosController extends Controller
{
    //

    public function mostrarAlumnos(){
        $alumnos = Alumno::all();
        return view('MostrarAlumnos', compact('alumnos')) ;
    }
}
