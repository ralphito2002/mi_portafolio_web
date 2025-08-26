<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato_personal extends Model
{
    //
    use HasFactory;
    protected $table = 'datos_personales';
    protected $primaryKey = 'id_datos';

    public $timestamps = false;

    protected $fillable = [

        'nombre',
        'correo',
        'telefono',
        'nacimiento',
        'residencia',
        'foto_perfil',
        'descripcion'

    ];

}
