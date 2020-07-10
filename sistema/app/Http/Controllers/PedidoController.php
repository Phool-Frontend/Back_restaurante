<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    
    public function index()
    {
        return Pedido::select('pedido.id','pedido.numero_mesa','pedido.tipo_pedido',
        'pedido.condicion','pedido.consumo','pedido.idpersonal','pedido.idmesa')
 ->join('personal','pedido.idpersonal','=','personal.id')
 ->get();
    }

    public function store(Request $request)
    {
        $pedido = new Pedido();
        $pedido->numero_mesa=$request->post('numero_mesa');
        $pedido->tipo_pedido=$request->post('tipo_pedido');
        $pedido->condicion=$request->post('condicion');
        //1° error => no es igual el identificador de variables enviadas de la api de angular 
        $pedido->consumo=$request->post('consumo');
        $pedido->idpersonal=$request->post('idpersonal');
        $pedido->idmesa=$request->post('idmesa');
        $pedido->save();
    }

   
    public function show($filtro)
    {
        return Pedido::where('pedido.id',$filtro)
                         ->orwhere('pedido.numero_mesa','like','%'.$filtro.'%')
                         ->join('personal','pedido.idpersonal','=','personal.id')
                         ->select('pedido.id','pedido.numero_mesa','pedido.tipo_pedido',
                                'pedido.condicion','pedido.consumo','pedido.idpersonal','pedido.idmesa')
                         ->get();
    }

    public function update(Request $request)
    {
        $pedido = Pedido::find($request->post('id'));
        $pedido->numero_mesa=$request->post('numero_mesa');
        $pedido->tipo_pedido=$request->post('tipo_pedido'); 
        $pedido->consumo=$request->post('consumo');
        $pedido->idpersonal=$request->post('idpersonal');
        $pedido->idmesa=$request->post('idmesa');
        $pedido->save();
    }

    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido->delete();
    }

    //GET
    public function activar($id)
    {
        $pedido = Pedido::find($id);
        $pedido->condicion=1;
        $pedido->save(); 
    }

    //GET

    public function desactivar($id)
    {
        
        $pedido = Pedido::find($id);
        $pedido->condicion=0;
        $pedido->save();
    }
}
