<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;

class Categoria extends Model
{
    //MAPEAR CON LA TABLA CATEGORIA
    protected $table="Categoria";
    protected $primaryKey="id";
    protected $fillable=['nombre','condicion'];
    public $timestamps=false;

    public function articulos()//[1 oo ]--- articulo = 1 && categoria = oo
    {
        return $this->hasMany('App\Articulo','idcategoria');
    }
    //////// para eliminar
    function deleteEmployee($id)
    {
        DB::table('categoria')->where('id',$id)->delete();
    }

}
