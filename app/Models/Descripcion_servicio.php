<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descripcion_servicio extends Model
{
    //
    use HasFactory;
    protected $table = 'descripciones_servicios';
    protected $primaryKey = 'id_descripcion_servicio';

    public $timestamps = false;

    protected $fillable = [
        'id_servicio',
        'descripcion'
    ];


    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'id_servicio', 'id_servicio');
    }
}
