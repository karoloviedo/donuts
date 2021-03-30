<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repartidor extends Model
{
    //
    protected $table = "repartidor";

    protected $fillable = [

        'pedidos',
        'estado',


    ];
}
