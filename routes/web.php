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

Route::get('/alumnos/editar/{id}',
            [AlumnosController::class, 'editar'])->name('alumno.editar');

Route::get('/alumnos/editar/salvar/{id}',
            [AlumnosController::class, 'guardarEdicion'] )->name('alumno.editar.guardar');

Route::get('/alumnos/eliminar/{id}',
            [AlumnosController::class, 'eliminar'] )->name('alumno.eliminar');

Route::get('/alumnos/destroy/{id}',
            [AlumnosController::class, 'destroy'] )->name('alumno.destroy');