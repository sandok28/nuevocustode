<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Redirect;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Collection;
class UsuariosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre = $request['name'];

        if ($request['name'])
        {
            $usuarios = User::all()->where('name','$name');
        }
        else
        {
            $usuarios = User::all();
        }

        return view('usuario.index',compact('usuarios'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuario.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        User::create([
            'name'=> $request['nombre'],
            'email'=> $request['nombre'],
            'password'=> bcrypt($request['contrasena']),
            'estatus'=> '1',
        ]);


        return redirect('/usuario')->with('message','El Usuario se ha registrado correctamente');


        return "Usuario Registrado";

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
        $usuario = User::find($id);

        dd($usuario->permisos);
        return view('usuario.edit',['usuario'=>$usuario]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        #dd($request->all()['nombre']);
        $variablesAdaptadas = [
            'name' => $request->all()['nombre'],
            'email'=> $request->all()['nombre'],
            'password'=> $request->all()['contrasena'],
            'estatus'=> $request->all()['estatus']
            ];
        #dd($variablesAdaptadas);
        $request['password'] = $request['password'];
        $usuario = User::find($id);
        $usuario->fill($variablesAdaptadas);
        $usuario->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return Redirect::to('/usuario');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
