<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ControllerProyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('proyectos', ControllerProyecto::class);
Route::apiResource('comentarios', ComentarioController::class);