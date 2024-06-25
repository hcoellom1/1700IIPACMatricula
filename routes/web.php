<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlumnosController;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/alumnos/mostrar',
            [AlumnosController::class, 'mostrarAlumnos']);
 
Route::get('/alumnos/crear',
            [AlumnosController::class, 'crearAlumno']);

Route::post('/alumnos/guardar',
            [AlumnosController::class, 'guardar'])->name('alumno.guardar');