<?php

namespace App\Http\Controllers;

use App\Mail\CorreoContacto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ControllerContactame extends Controller
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function enviarCorreo(Request $request)
    {
        
      $fechaEmision = Carbon::today()->format('d-m-Y');

         $datosCorreo = [
            'nombreRemitente' => $request->nombreRemitente,
            'asunto' => $request->asunto,
            'correo' => $request->correo,
            'mensaje' => $request->mensaje,
            'fechaEmision' => $fechaEmision
        ];

        Mail::to('ralfhsebastiaar@gmail.com')->send(new CorreoContacto($datosCorreo));

        
        return response()->json(['success' => true, 'message' => 'Correo enviado con Exito!'], 200);
    }
}
