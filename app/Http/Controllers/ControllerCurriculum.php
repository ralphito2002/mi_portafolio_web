<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ControllerCurriculum extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $curriculums = Curriculum::all();

        return response()->json(['success' => true, 'message' => 'Lista de curriculums de servicios obtenida con exito!', 'data' => $curriculums], 200);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'nombre_archivo' => 'required',
            'vista_publica' => 'required'
        ]);

        $nuevoCurriculum = new Curriculum();

        $nuevoCurriculum->titulo = $request->titulo;
        $nuevoCurriculum->descripcion = $request->descripcion;
        $nuevoCurriculum->nombre_archivo = $request->nombre_archivo;
        $nuevoCurriculum->ultima_actualizacion = Carbon::today()->format('Y-m-d');
        $nuevoCurriculum->vista_publica = $request->vista_publica;

        $nuevoCurriculum->save();

        return response()->json(['success' => true, 'message' => 'Curriculum almacenado con Exito!','data'=>$nuevoCurriculum], 201);


    }


    public function show(string $id)
    {
        $curriculumSeleccionado = Curriculum::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'Curriculum obtenido con éxito',
            'data' => $curriculumSeleccionado
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'nombre_archivo' => 'required',
            'vista_publica' => 'required'
        ]);

        $editarCurriculum = Curriculum::findOrFail($id);

        $editarCurriculum->titulo = $request->titulo;
        $editarCurriculum->descripcion = $request->descripcion;
        $editarCurriculum->nombre_archivo = $request->nombre_archivo;
        $editarCurriculum->ultima_actualizacion = Carbon::today()->format('Y-m-d');
        $editarCurriculum->vista_publica = $request->vista_publica;

        $editarCurriculum->save();

        return response()->json(['success' => true, 'message' => 'Curriculum actualizado con Exito!','data'=>$editarCurriculum], 200);
    }


    public function destroy(string $id)
    {
        $curriculumEliminado = Curriculum::findOrFail($id);

        $curriculumEliminado->delete();

        return response()->json(['success' => true, 'message' => 'Curriculum eliminado con Exito!'], 200);
    }
}
