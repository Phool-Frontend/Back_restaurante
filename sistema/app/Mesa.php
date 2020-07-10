<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table="mesa";
    protected $primaryKey="id";
    protected $fillable=['condicion','observaciones'];
    public $timestamps=false;

    public function pedidos()//[1 oo ]--- articulo = 1 && categoria = oo
    {
        return $this->hasMany('App\Pedido','idmesa');
    }
}
