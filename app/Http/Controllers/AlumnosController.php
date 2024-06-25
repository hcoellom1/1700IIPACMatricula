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

    public function crearAlumno(){
        return view('agregaralumno');
    }

    public function guardar(Request $request){
        $nvoAlumno = new Alumno();
        $nvoAlumno->apellido = $request->apellido;
        $nvoAlumno->correo = $request->correo;
        $nvoAlumno->telefono = $request->telefono;
        $nvoAlumno->nombre = $request->name;
        $nvoAlumno->estado = 'A';
        $nvoAlumno->codigoCarrera = 1;
        $nvoAlumno->fechaIngreso = '2024-06-24';
        $nvoAlumno->save();
        return redirect('/alumnos/mostrar');
    }
}
