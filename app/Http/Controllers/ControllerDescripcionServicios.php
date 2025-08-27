<?php

namespace App\Http\Controllers;

use App\Models\Descripcion_servicio;
use Illuminate\Http\Request;

class ControllerDescripcionServicios extends Controller
{
    public function index()
    {
        $descripcionesServicio = Descripcion_servicio::with('servicio')->get();

        return response()->json(['success' => true, 'message' => 'Lista de descripciones de servicios obtenida con exito!', 'data' => $descripcionesServicio], 200);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_servicio' => 'required',
            'descripcion' => 'required'
        ]);

        $nuevaDescripcion = new Descripcion_servicio();

        $nuevaDescripcion->id_servicio = $request->id_servicio;
        $nuevaDescripcion->descripcion = $request->descripcion;

        $nuevaDescripcion->save();

        return response()->json(['success' => true, 'message' => 'Descripcion almacenada con Exito!','data'=>$nuevaDescripcion], 201);
    }


    public function show(string $id)
    {
        $descripcionSeleccionada = Descripcion_servicio::with('servicio')->findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'Descripcion obtenida con éxito',
            'data' => $descripcionSeleccionada
        ], 200);
    }


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'id_servicio' => 'required',
            'descripcion' => 'required'
        ]);

        $editarDescripcion = Descripcion_servicio::findOrFail($id);

        $editarDescripcion->id_servicio = $request->id_servicio;
        $editarDescripcion->descripcion = $request->descripcion;

        $editarDescripcion->save();

        return response()->json(['success' => true, 'message' => 'Descripcion actualizada con Exito!','data'=>$editarDescripcion], 200);
    }


    public function destroy(string $id)
    {
        $descripcionEliminada = Descripcion_servicio::findOrFail($id);

        $descripcionEliminada->delete();

        return response()->json(['success' => true, 'message' => 'Servicio eliminado con Exito!'], 200);
    }
}
