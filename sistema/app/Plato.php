<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;

class Plato extends Model
{
    //MAPEAR CON LA TABLA CATEGORIA
    protected $table="plato";
    protected $primaryKey="id";
    protected $fillable=['nombre','precio','tipo','cantidad','idplato'];
    public $timestamps=false;

    public function plato_pedido()//[1 oo ]--- articulo = 1 && categoria = oo
    {
        return $this->hasMany('App\Plato_pedido','idplato');
    }
   

}
