<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use DB;
class ClienteController extends Controller
{
    //
    public function index(Request $request)
    {
        $clientes = DB::table('users')
        ->where('tipo_usuario','like','%'."normal".'%')
        ->paginate(5);
        return view('admin.admincliente',compact('clientes')); 
    }
}
