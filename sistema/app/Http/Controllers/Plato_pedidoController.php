<?php

namespace App\Http\Controllers;

use App\Plato_pedido;
use Illuminate\Http\Request;

class Plato_pedidoController extends Controller
{
    
    public function index()
    {
        return Plato_pedido::select('plato_pedido.id','plato_pedido.idplato',
                                'plato_pedido.idpedido')
                         ->join('pedido','plato_pedido.idpedido','=','pedido.id')
                         ->get();
    }

   
    

    public function store(Request $request)
    {
        $plato_pedido = new Plato_pedido();
       
        //1° error => no es igual el identificador de variables enviadas de la api de angular 
        $plato_pedido->idplato=$request->post('idplato');
        $plato_pedido->idpedido=$request->post('idpedido');
        $plato_pedido->save();
    }

 
    public function show($filtro)
    {
        return Plato_pedido::where('plato_pedido.id',$filtro)
                         ->orwhere('plato_pedido.idplato','like','%'.$filtro.'%')
                         ->join('pedido','plato_pedido.idpedido','=','pedido.id')
                         ->select('plato_pedido.id','plato_pedido.idplato','plato_pedido.idpedido')
                         ->get();
    }

    
    public function update(Request $request)
    {
        $plato_pedido = Plato_pedido::find($request->post('id'));
        $plato_pedido->idplato=$request->post('idplato');
        $plato_pedido->idpedido=$request->post('idpedido');
        $plato_pedido->save();
    }

    public function destroy($id)
    {
        $plato_pedido=Plato_pedido::find($id);
        $plato_pedido->delete();
    }
}
