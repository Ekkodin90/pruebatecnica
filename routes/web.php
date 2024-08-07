<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/form/crear', [FormController::class, 'crear']);

Route::post('/form', [FormController::class, 'almacenar']);

Route::get('/form/{idTarea}/editar', [FormController::class, 'editar']);

Route::put('/form/{idTarea}', [FormController::class, 'actualizar']);

Route::delete('/form/{idTarea}', [FormController::class, 'eliminar']);



