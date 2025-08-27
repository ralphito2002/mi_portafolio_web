<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnologia extends Model
{
    //
    use HasFactory;
    protected $table = 'tecnologias';
    protected $primaryKey = 'id_tecnologia';
    
    public $timestamps = false;

    protected $fillable = [

        'nombre',
        'icono',
        'descripcion',
        'categoria'

    ];

    public function proyectos()
    {
        return $this->belongsToMany(
            Proyecto::class,
            'proyecto_tecnologia', 'id_tecnologia', 'id_proyecto'
        );
    }
    
}
