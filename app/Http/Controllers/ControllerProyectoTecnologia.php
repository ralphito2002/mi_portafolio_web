<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Proyecto_tecnologia;
use Illuminate\Http\Request;

class ControllerProyectoTecnologia extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_proyecto' => 'required',
            'id_tecnologia' => 'required'
        ]);

        $proyectoExiste = Proyecto_tecnologia::where('id_proyecto', $request->id_proyecto)->where('id_tecnologia', $request->id_tecnologia);

        if ($proyectoExiste->exists()) {
            return response()->json(['message' => 'La tecnología ya está asociada a este proyecto'], 409);
        }

        Proyecto_tecnologia::create([
            'id_proyecto' => $request->id_proyecto,
            'id_tecnologia' => $request->id_tecnologia
        ]);

        return response()->json(['message' => 'Asociacion creada correctamente'], 201);
    }


    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function desvincularRelacion (Request $request)
    {
        $request->validate([
            'id_proyecto' => 'required',
            'id_tecnologia' => 'required'
        ]);

         $eliminarAsociacion = Proyecto_tecnologia::where('id_proyecto', $request->id_proyecto)->where('id_tecnologia', $request->id_tecnologia);

         if($eliminarAsociacion->exists()){

            $eliminarAsociacion->delete();

            return response()->json(['success'=>true, 'message'=>'Asociacion eliminada con exito!'], 200);

         }

         return response()->json(['success'=>false, 'message'=>'No existe la asociacion entre el proyecto y la tecnologia que deseas desvincular.'], 404);
        
    }
}
