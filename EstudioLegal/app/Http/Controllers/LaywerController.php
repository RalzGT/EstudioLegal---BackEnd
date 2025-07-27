<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaywerController extends Controller
{
    public function hi()
    {
         return response()->json("Hola desde controlador");
    }

}
