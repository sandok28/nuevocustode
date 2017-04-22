<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function vistafuncionarios()
    {
        return view("vistaFuncionarios");
    }
}
