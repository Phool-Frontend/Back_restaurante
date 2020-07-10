<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table="pedido";
    protected $primaryKey="id";
    protected $fillable=['numero_mesa', 'tipo_pedido', 'condicion','consumo','idpersonal','idmesa'];
    public $timestamps=false;

    public function personal()
    {
        return $this->belongsTo('App\Personal','idpersonal');
    }

    public function mesa()
    {
        return $this->belongsTo('App\Mesa','idmesa');
    }
}
