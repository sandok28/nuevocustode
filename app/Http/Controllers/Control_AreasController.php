<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Control_AreasController extends Controller
{
    public function controlareas()
    {
        $puertas = \App\Puerta::All();
        return view('control_areas.vistaControlAreas',compact('puertas'));
    }
}
