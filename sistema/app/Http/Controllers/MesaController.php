<?php

namespace App\Http\Controllers;

use App\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
   
    public function index()
    {
        return Mesa::all();
    }

    public function store(Request $request)
    {
        $mesa =new Mesa;
        $mesa->condicion=$request->post('condicion');
        $mesa->observaciones=$request->post('observaciones');
        //ejecutamos el guardado
        $mesa->save();
    }


    public function show($id)
    {
        $mesa = Mesa::find($id);
        return $mesa;
    }

    
    public function update(Request $request)
    {
        $mesa = Mesa::find($request->post('id'));
        $mesa->observaciones=$request->post('observaciones');
        //$mesa->condicion=$request->post('condicion');
        //ejecutamos el guardado
        $mesa->save();
    }

    public function destroy($id)
    {
        $mesa=Mesa::find($id);
        $mesa->delete();
    }
    //GET
    public function activar($id)
    {
        $mesa=Mesa::find($id);
        $mesa->condicion=1;
        $mesa->save(); 
    }

    //GET

    public function desactivar($id)
    {
        $mesa=Mesa::find($id);
        $mesa->condicion=0;
        $mesa->save();
    }
}
