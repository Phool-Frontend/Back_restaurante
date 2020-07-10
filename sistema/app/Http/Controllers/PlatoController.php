<?php

namespace App\Http\Controllers;

use App\Plato;
use Illuminate\Http\Request;

class PlatoController extends Controller
{
   
    public function index()
    {
        return Plato::all();
    }

  
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $plato =new Plato;
        $plato->nombre=$request->post('nombre');
        $plato->precio=$request->post('precio');
        $plato->tipo=$request->post('tipo');
        $plato->cantidad=$request->post('cantidad');
        //ejecutamos el guardado
        $plato->save();
    }

   
    public function show($id)
    {
        $plato = Plato::find($id);
        return $plato;
    }

   
    public function update(Request $request)
    {
        $plato = Plato::find($request->post('id'));
        $plato->nombre=$request->post('nombre');
        $plato->precio=$request->post('precio');
        $plato->tipo=$request->post('tipo');
        $plato->cantidad=$request->post('cantidad');
        $plato->save();
    }

   
    public function destroy($id)
    {
        $plato=Plato::find($id);
        $plato->delete();
    }
}
