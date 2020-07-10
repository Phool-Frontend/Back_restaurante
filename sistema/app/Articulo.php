<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //MAPEAR CON LA TABLA ARTICULO
    protected $table="articulo";
    protected $primaryKey="id";
    protected $fillable=['nombre', 'precio', 'condicion','idcategoria'];
    public $timestamps=false;

    public function categoria()
    {
        return $this->belongsTo('App\Categoria','idcategoria');
    }
}
