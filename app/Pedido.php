<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $table = "pedidos";

    protected $fillable = [

        'nombre_cliente',
        'atendio',
        'repartio',
        'detalle_cliente'


    ];
}
