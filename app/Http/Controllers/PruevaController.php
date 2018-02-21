<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prueva;

class PruevaController extends Controller
{
    //
    public function mostrar(Request $request){
        $pruevas = Prueva::all();
        return view('layouts.analisispost',['pruevas'=>$pruevas]);
    }
}
