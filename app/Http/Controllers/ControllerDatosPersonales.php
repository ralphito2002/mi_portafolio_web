<?php

namespace App\Http\Controllers;

use App\Models\Dato_personal;
use Illuminate\Http\Request;

class ControllerDatosPersonales extends Controller
{

    public function index()
    {
        $datosPersonales = Dato_personal::all();

        return response()->json(['success' => true, 'message' => 'Datos personales obtenidos con exito!', 'data' => $datosPersonales], 200);
    }



    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'nombre' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'nacimiento' => 'required',
            'residencia' => 'required',
            'descripcion' => 'required',
            'profesion' => 'required'
        ]);

        $actualizarDatosPersonales = Dato_personal::findOrFail(1);

        $actualizarDatosPersonales->nombre = $request->nombre;
        $actualizarDatosPersonales->correo = $request->correo;
        $actualizarDatosPersonales->telefono = $request->telefono;
        $actualizarDatosPersonales->nacimiento = $request->nacimiento;
        $actualizarDatosPersonales->residencia = $request->residencia;
        $actualizarDatosPersonales->descripcion = $request->descripcion;
        $actualizarDatosPersonales->profesion = $request->profesion;

        $actualizarDatosPersonales->save();

        return response()->json(['success' => true, 'message' => 'Datos ersonales actualizados con exito!', 'data' => $actualizarDatosPersonales], 200);


    }


    public function destroy(string $id)
    {
        //
    }
}
