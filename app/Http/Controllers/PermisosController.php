<?php

namespace App\Http\Controllers;

use App\Permiso;
use Illuminate\Http\Request;
use App\User;
use Session;
use Redirect;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Collection;
class PermisosController extends Controller
{
    public function index(Request $request)
    {
        $nombre = $request['name'];

        if ($request['name'])
        {
            $permisos = Permiso::all()->where('name','$name');
        }
        else
        {
            $permisos = Permiso::all();
        }

        return view('permisos.index',compact('permisos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permisos.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Permiso::create([
            'nombre'=> $request['nombre'],
            'estatus'=> '1',
        ]);

        return redirect('/permiso')->with('message','El Permiso se ha registrado correctamente');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permiso = Permiso::find($id);
        return view('permisos.edit',['permiso'=>$permiso]);
    }

    public function update(Request $request, $id)
    {

        $permiso = Permiso::find($id);
        $permiso->fill($request->all());
        $permiso->save();
        Session::flash('message','Permiso Actualizado Correctamente');
        return Redirect::to('/permiso');
    }

}
