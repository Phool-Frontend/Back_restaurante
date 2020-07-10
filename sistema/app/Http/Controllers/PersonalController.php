<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    
    public function index()
    {
        return Personal::all();
    }

  
    public function store(Request $request)
    {
        $personal =new Personal;
        $personal->nombre=$request->post('nombre');
        //ejecutamos el guardado
        $personal->save();
    }


    public function show($id)
    {
        $personal=Personal::find($id);
        return $personal;
    }

    public function update(Request $request)
    {
        $personal=Personal::find($request->post('id'));
        $personal->nombre=$request->post('nombre');
        //$personal->condicion=$request->post('condicion');
        //ejecutamos el guardado
        $personal->save();
    }

   
    public function destroy($id)
    {
        $personal=Personal::find($id);
        $personal->delete();
    }
}
