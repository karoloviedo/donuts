<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    //
    protected $table = "encargados";

    protected $fillable = [

        'nombre',
        'solicitudes',
        'estado',


    ];
}
