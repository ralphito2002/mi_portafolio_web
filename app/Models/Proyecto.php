<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
     use HasFactory;
    protected $table = 'proyectos';
    protected $primaryKey = 'id_proyecto';

    public $timestamps = false;

    protected $fillable = [

        'titulo', 
        'descripcion', 
        'imagen', 
        'rol', 
        'fecha_finalizacion'

    ];

     public function tecnologias()
    {
        return $this->belongsToMany(
            Tecnologia::class,'proyecto_tecnologia', 'id_proyecto', 'id_tecnologia'        
        );
    }

}
