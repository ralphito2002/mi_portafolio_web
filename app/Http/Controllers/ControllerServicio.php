<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ControllerServicio extends Controller
{

    public function index()
    {
        $Servicios = Servicio::with('descripciones')->get();

        return response()->json(['success' => true, 'message' => 'Lista de servicios obtenida con exito!', 'data' => $Servicios], 200);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required'
        ]);

        $nuevoServicio = new Servicio();

        $nuevoServicio->nombre = $request->nombre;

        $nuevoServicio->save();

        return response()->json(['success' => true, 'message' => 'Servicio almacenado con Exito!','data'=>$nuevoServicio], 201);
    }


    public function show(string $id)
    {
        $servicioSeleccionado = Servicio::with('descripciones')->findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'Servicio obtenido con éxito',
            'data' => $servicioSeleccionado
        ], 200);
    }


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nombre' => 'required'
        ]);

        $editarServicio = Servicio::find($id);

        $editarServicio->nombre = $request->nombre;

        $editarServicio->save();

        return response()->json(['success' => true, 'message' => 'Servicio actualizado con Exito!','data'=>$editarServicio], 200);
    }


    public function destroy(string $id)
    {
        $servicioEliminado = Servicio::find($id);

        $servicioEliminado->delete();

        return response()->json(['success' => true, 'message' => 'Servicio eliminado con Exito!'], 200);
    }
}
