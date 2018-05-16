<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PersonalController extends Controller
{
    //
    public function index(Request $request)
    {
        $personals = DB::table('users')
        ->where('tipo_usuario','like','%'."admin".'%')
        ->paginate(5);
        return view('admin.adminusuario',compact('personals')); 
    }
}
