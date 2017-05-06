<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Auth;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;



class LogController extends Controller
{
    public function store(LoginRequest $request)
    {
        #dd($request['contrasena']);
        if(Auth::attempt(['email'=>$request['email'], 'password'=> $request['password']])){
            #dd($request['contrasena']);
            return Redirect::to('home');
        }
        Session::flash('message-error','Datos son incorrectos');
        return Redirect::to('/');
        #return $request->nombre;
    }
    public function logout(LoginRequest $request)
    {
        Auth::logout();
        return Redirect::to('/');
    }
}
