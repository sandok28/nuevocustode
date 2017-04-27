<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstadisticasController extends Controller
{
    public function vistaEstadisticas()
    {
        return view('estadisticas.vistaEstadisticas');
    }
}
