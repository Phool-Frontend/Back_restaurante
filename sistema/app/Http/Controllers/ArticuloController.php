<?php

namespace App\Http\Controllers;

use App\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
   
    public function index()
    {
        //return Articulo::all();
        return Articulo::select('articulo.id','articulo.nombre','articulo.precio',
                                'articulo.condicion','articulo.idcategoria',
                                'categoria.nombre as categoria')
                         ->join('Categoria','articulo.idcategoria','=','categoria.id')
                         ->get();
    }

  
    
    public function store(Request $request)
    {
        $articulo = new Articulo();
        $articulo->nombre=$request->post('nombre');
        $articulo->precio=$request->post('precio');
        $articulo->condicion=$request->post('condicion');
        //1° error => no es igual el identificador de variables enviadas de la api de angular 
        $articulo->idcategoria=$request->post('idcategoria');
        $articulo->save();
    }

    public function show($filtro)
    {
         return Articulo::where('articulo.id',$filtro)
                         ->orwhere('articulo.nombre','like','%'.$filtro.'%')
                         ->join('Categoria','articulo.idcategoria','=','categoria.id')
                         ->select('articulo.id','articulo.nombre','articulo.precio',
                                'articulo.condicion','articulo.idcategoria',
                                'categoria.nombre as categoria')
                         ->get();
    }


    public function update(Request $request)
    {
        $articulo=Articulo::find($request->post('id'));
        $articulo->nombre=$request->post('nombre');
        $articulo->precio=$request->post('precio');
        $articulo->idcategoria=$request->post('idcategoria');
        $articulo->save();
    }
    
    public function destroy($id)
    {
        $articulo=Articulo::find($id);
        $articulo->delete();
    }

    //GET
    public function activar($id)
    {
        $articulo=Articulo::find($id);
        $articulo->condicion=1;
        $articulo->save(); 
    }

    //GET

    public function desactivar($id)
    {
        
        $articulo=Articulo::find($id);
        $articulo->condicion=0;
        $articulo->save();
    }
}
