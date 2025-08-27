<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
    }

    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        $adminSeleccionado = Admin::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'Administrador obtenida con éxito',
            'data' => $adminSeleccionado
        ], 200);
    }


    public function update(Request $request, string $id)
    {

          $validated = $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $editarAdmin = Admin::findOrFail($id);

        $editarAdmin->nombre = $request->nombre;
        $editarAdmin->email = $request->email;
        $editarAdmin->password = $request->password;

        $editarAdmin->save();

        return response()->json(['success' => true, 'message' => 'Administrador actualizado con Exito!','data'=>$editarAdmin], 200);
    }


    public function destroy(Admin $admin)
    {
        //
    }
}
