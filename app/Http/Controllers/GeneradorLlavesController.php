<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneradorLlavesController extends Controller
{
    public function GenerarLlave()
    {
        $llave = substr( md5(microtime()), 1, 8);
        echo $llave;
        return $llave;
    }
}
