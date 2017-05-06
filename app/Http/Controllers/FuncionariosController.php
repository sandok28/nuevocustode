<?php

namespace App\Http\Controllers;

use App\Funcionario;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function vistafuncionarios()
    {
        $funcionarios = Funcionario::all();
        return view("Funcionarios.vistaFuncionarios",compact('funcionarios'));
    }

    public function vistaCrearFuncionario()
    {
        return view('Funcionarios.vistaCrearFuncionario');
    }
}
