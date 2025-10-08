<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function index()
    {
        $comentario = Comentario::orderBy('id_comentario', 'desc')->get();

        return response()->json(['success' => true, 'message' => 'Lista de comentarios obtenida con exito!', 'data' => $comentario], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_usuario' => 'required',
            'comentario' => 'required',
            'reaccion' => 'required'
        ]);

        $nuevoComentario = new Comentario();

        $nuevoComentario->nombre_usuario = $request->nombre_usuario;
        $nuevoComentario->comentario = $request->comentario;
        $nuevoComentario->fecha_creacion = Carbon::today()->format('Y-m-d');
        $nuevoComentario->reaccion = $request->reaccion;

        $nuevoComentario->save();

        return response()->json(['success' => true, 'message' => 'Comentario almacenado con Exito!'], 201);
    }


    public function show(string $id)
    {

        $comentarioSeleccionado = Comentario::findOrFail($id);


        return response()->json([
            'success' => true,
            'message' => 'Comentario obtenido con éxito',
            'data' => $comentarioSeleccionado
        ], 200);
    }


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nombre_usuario' => 'required',
            'comentario' => 'required',
            'reaccion' => 'required'
        ]);

        $editarComentario = Comentario::findOrFail($id);

        $editarComentario->nombre_usuario = $request->nombre_usuario;
        $editarComentario->comentario = $request->comentario;
        $editarComentario->reaccion = $request->reaccion;

        $editarComentario->save();

        return response()->json(['success' => true, 'message' => 'Comentario actualizado con Exito!','data' => $editarComentario], 200);
    }


    public function destroy(string $id)
    {
        $comentarioEliminado = Comentario::find($id);

        $comentarioEliminado->delete();

        return response()->json(['success' => true, 'message' => 'Comentario eliminado con Exito!'], 200);
    }


    public function ultimosComentarios(){

        $ultimosComentarios = Comentario::orderBy('id_comentario', 'desc')
    ->take(8)
    ->get();

        return response()->json(['success' => true, 'message' => 'Lista de ultimos comentarios obtenida con exito!', 'data' => $ultimosComentarios], 200);

    }
}
