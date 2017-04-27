<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Puerta;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PuertasController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function vistaPuertas()
    {
        $puertas = Puerta::All();
       return view('puertas.vistaPuertas',compact('puertas'));
    }
    public function crear()
    {
       return view('puertas.crear');
    }

    public function actualizar()
    {
        return view('puertas.actualizar');
    }
    public function store(Request $request)
    {
        \App\Puerta::create([
            'puerta_especial'=>$request['puerta_especial'],//pregunta e investigar como optengo valor de chekbox cambiar este valor
            'nombre'=> $request['nombre'],
            'llave_rfid'=> $request['llave'],
            'ip'=>$request['dir_ip'],
        ]);
        return "PUERTA CREADA";
    }
    public function edit($id)
    {
        $puerta=Puerta::find($id);
        return view('puertas.actualizar',['puerta'=>$puerta]);
    }

    public function update($id,Request $request)
    {
        $puerta=Puerta::find($id);
        $puerta->fill($request->all());
        $puerta->save();

        Session::flash('message','Usuario Actualziado Correctamente');
        return Redirect::to('puerta');
    }
}
