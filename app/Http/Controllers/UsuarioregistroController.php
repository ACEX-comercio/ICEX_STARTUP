<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Hash;
class UsuarioregistroController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('layouts.registro');
    }
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario -> nombre = $request -> nombre;
        $usuario -> apellido = $request -> apellido;
        $usuario -> username = $request -> nick;
        $usuario -> email = $request -> email;
        $usuario -> password = Hash::make($request -> contra);
        $usuario -> tipo_usuario = "normal";
        $usuario->save();
        return redirect('/inicio');
    }
}
