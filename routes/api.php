<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ControllerCurriculum;
use App\Http\Controllers\ControllerDatosPersonales;
use App\Http\Controllers\ControllerDescripcionServicios;
use App\Http\Controllers\ControllerProyecto;
use App\Http\Controllers\ControllerProyectoTecnologia;
use App\Http\Controllers\ControllerServicio;
use App\Http\Controllers\ControllerTecnologia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('proyectos', ControllerProyecto::class);
Route::apiResource('comentarios', ComentarioController::class);
Route::apiResource('datosPersonales', ControllerDatosPersonales::class);
Route::apiResource('tecnologias', ControllerTecnologia::class);
Route::apiResource('servicios', ControllerServicio::class);
Route::apiResource('descripcionesServicios', ControllerDescripcionServicios::class);
Route::apiResource('admins', AdminController::class);
Route::apiResource('curriculums', ControllerCurriculum::class);
Route::apiResource('proyectoTecnologia', ControllerProyectoTecnologia::class);
Route::post('/proyectoTecnologia/delete', [ControllerProyectoTecnologia::class, 'desvincularRelacion']);
