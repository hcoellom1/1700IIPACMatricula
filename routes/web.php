<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlumnosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos/mostrar',
            [AlumnosController::class, 'mostrarAlumnos']);