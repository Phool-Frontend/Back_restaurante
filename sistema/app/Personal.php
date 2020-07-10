<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table="personal";
    protected $primaryKey="id";
    protected $fillable=['nombre'];
    public $timestamps=false;

    public function pedidos()//[1 oo ]--- articulo = 1 && categoria = oo
    {
        return $this->hasMany('App\Pedido','idpersonal');
    }
}
