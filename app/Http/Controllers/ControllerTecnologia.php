<?php

namespace App\Http\Controllers;

use App\Models\Tecnologia;
use Illuminate\Http\Request;

class ControllerTecnologia extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tecnologias = Tecnologia::with('proyectos')->get();

        return response()->json(['success' => true, 'message' => 'Lista de tecnologias obtenida con exito!', 'data' => $tecnologias], 200);

  
    }


    public function store(Request $request)
    {

        $validate = $request->validate([
            'nombre'=>'required',
            'icono'=>'required',
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);

        $nuevaTecnologia = new Tecnologia();

        $nuevaTecnologia->nombre = $request->nombre;
        $nuevaTecnologia->icono = $request->icono;
        $nuevaTecnologia->descripcion = $request->descripcion;
        $nuevaTecnologia->categoria = $request->categoria;
        
        $nuevaTecnologia->save();

        return response()->json(['success'=>true,'message'=>'Lista de tecnologias obtenida con exito!', 'data'=>$nuevaTecnologia],201);

    }


    public function show(string $id)
    {
        $tecnologiaSeleccionada = Tecnologia::with('proyectos')->findOrFail($id);

         return response()->json(['success'=>true,'message'=>'Tecnologia obtenida con exito!', 'data'=>$tecnologiaSeleccionada],200);

    }


    public function update(Request $request, string $id)
    {
         $validate = $request->validate([
            'nombre'=>'required',
            'icono'=>'required',
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);

        $editarTecnologia = Tecnologia::findOrFail($id);

        $editarTecnologia->nombre = $request->nombre;
        $editarTecnologia->icono = $request->icono;
        $editarTecnologia->descripcion = $request->descripcion;
        $editarTecnologia->categoria = $request->categoria;
        
        $editarTecnologia->save();

        return response()->json(['success'=>true,'message'=>'Tecnologia actualizada con exito!', 'data'=>$editarTecnologia],200);
    }


    public function destroy(string $id)
    {
        $tecnologiaEliminada = Tecnologia::find($id);

        $tecnologiaEliminada->delete();

        return response()->json(['success' => true, 'message' => 'Tecnologia eliminada con Exito!'], 200);
    }
}
