<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    
    public function index()
    {
        //LISTAR CATEGORIAS
        return Categoria::all();
    }

    public function store(Request $request)
    {
        $categoria =new Categoria;
        $categoria->nombre=$request->post('nombre');
        $categoria->condicion=$request->post('condicion');
        //ejecutamos el guardado
        $categoria->save();
        
    }

    /******FILTRP PARA MOSTRAR */
    ///GET
    public function show($id)
    {
        $categoria=Categoria::find($id);
        return $categoria;
    }

   
    //PUT PARA ACTUALIZAR 
    public function update(Request $request)
    {
        $categoria=Categoria::find($request->post('id'));
        $categoria->nombre=$request->post('nombre');
        //$categoria->condicion=$request->post('condicion');
        //ejecutamos el guardado
        $categoria->save();
    }

     function deleteEmployee(Request $request)
    {
        //$categoria=Categoria::find($id);
        //$categoria->delete();
        $id=$request->id;
        $categoria = new Categoria;
        $categoria->deleteEmployee($id);
    }

    //GET
    public function activar($id)
    {
        $categoria=Categoria::find($id);
        $categoria->condicion=1;
        $categoria->save(); 
    }

    //GET

    public function desactivar($id)
    {
        $categoria=Categoria::find($id);
        $categoria->condicion=0;
        $categoria->save();
    }
}
