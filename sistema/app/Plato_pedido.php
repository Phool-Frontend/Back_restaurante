<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plato_pedido extends Model
{
    protected $table="plato_pedido";
    protected $primaryKey="id";
    protected $fillable=['idplato', 'idpedido'];
    public $timestamps=false;

    public function pedido()
    {
        return $this->belongsTo('App\Pedido','idpedido');
    }

    public function plato()
    {
        return $this->belongsTo('App\Plato','idplato');
    }
}
