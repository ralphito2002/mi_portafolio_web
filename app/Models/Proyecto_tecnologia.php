<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto_tecnologia extends Model
{
    //
    use HasFactory;
    protected $table = 'proyecto_tecnologia';
    protected $primaryKey = 'id_proyecto_tecnologia';

    public $timestamps = false;

    protected $fillable = [

        'id_proyecto',
        'id_tecnologia'

    ];

}
