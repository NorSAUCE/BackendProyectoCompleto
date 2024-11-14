<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CorreoController;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/empleado', function () {
    return view('empleado/index');
});*/

Route::resource('empleado',EmpleadoController::class);
Route::get('/enviar-correo', [CorreoController::class, 'enviarCorreo']);
