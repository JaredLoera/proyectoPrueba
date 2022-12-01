<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prueba extends Controller
{
    public function pruebaunocomposer(){
        return response()->json(["si sirve composer"],200);
    }
}
