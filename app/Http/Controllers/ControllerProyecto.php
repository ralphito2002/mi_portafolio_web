<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class ControllerProyecto extends Controller
{

    public function index()
    {      
        $proyectos = Proyecto::with('tecnologias')->get();

        return response()->json(['success'=>true, 'message'=>'Lista de proyectos obtenida con exito!', 'data'=>$proyectos], 200);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
        'titulo' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required',
        'rol' => 'required',
        'fecha_finalizacion' => 'required'
    ]);

    $nuevoProyecto = new Proyecto();

    $nuevoProyecto->titulo = $request->titulo;
    $nuevoProyecto->descripcion = $request->descripcion;
    $nuevoProyecto->imagen = $request->imagen;
    $nuevoProyecto->rol = $request->rol;
    $nuevoProyecto->fecha_finalizacion = $request->fecha_finalizacion;

    $nuevoProyecto->save();

    return response()->json([ 'success'=> true, 'message'=> 'Proyecto almacenado con Exito!' ], 201);
    }


    public function show(string $id)
    {
        $proyectoSeleccionado = Proyecto::with('tecnologias')->findOrFail($id);

       return response()->json(['success' => true,'message' => 'Proyecto encontrado con éxito', 'data' => $proyectoSeleccionado
    ], 200);   
    }


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
        'titulo' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required',
        'rol' => 'required',
        'fecha_finalizacion' => 'required'
    ]);

     $editarProyecto = Proyecto::find($id);

    $editarProyecto->titulo = $request->titulo;
    $editarProyecto->descripcion = $request->descripcion;
    $editarProyecto->imagen = $request->imagen;
    $editarProyecto->rol = $request->rol;
    $editarProyecto->fecha_finalizacion = $request->fecha_finalizacion;

    $editarProyecto->save();

    return response()->json(['success'=> true, 'message'=>'Proyecto modificado con Exito!'], 200);
    }


    public function destroy(string $id)
    {
        $proyectoEliminado = Proyecto::find($id);

        $proyectoEliminado->delete();

        return response()->json([ 'success'=> true, 'message'=> 'Proyecto eliminado con Exito!'], 200);
    }
}
