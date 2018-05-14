<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
//realisamos la referencia a los dos modelos que utilisaremos
use App\Pais;
use App\Inteligencia;
use DB;

class BusquedaController extends Controller
{
    //definimos la funcion que etrara
    public function buscar(Request $request){

        //$informacion=Inteligencia::where('exportador','like','%'.$request->nbexportador.'%')->get();
        //dd($informacion);
        /*if ($request->has("nbcomercial")){
            //echo "Encontré la edad";
            $informacion=Inteligencia::where('exportador','like','%'.$request->nbcomercial.'%')->get();
            //echo $request->nbcomercial;
        }
        if($request->has("ptarancelaria")){
            //echo "e encontrado la partida arancelari";
            $informacion=$informacion::where('exportador','like','%'.$request->ptarancelaria.'%')->get();
            //echo $request->ptarancelaria;
        }
        if($request->has("nbexportador")){
            //echo "e encontrado el nombre del exportador";
            $informacion=Inteligencia::where('exportador','like','%'.$request->nbexportador.'%')->get();
            //echo $request->nbexportador;
            
            //$usuarios = Inteligencia::Busqueda($request->get('nbexportador'));
            //return view('layouts.analisispost',['usuarios'=>$usuarios]);
        }
        if($request->has("nbinportador")){
            //echo "e encontrado el nombre del inportador";
            $informacion=Inteligencia::where('exportador','like','%'.$request->nbinportador.'%')->get();
            //echo $request->nbinportador;
        }*/
        
        /*$informacions = DB::table('inteligencia')
            ->join('paises', function($join) use ($request) {
                $join->on('inteligencia.puerto', 'LIKE', DB::raw("CONCAT('%', paises.codigo_iso)"))
                ->where('inteligencia.partida_arancelaria','like','%'.$request->ptarancelaria.'%')
                ->where('inteligencia.exportador','like','%'.$request->nbexportador.'%')
                ->where('inteligencia.importador','like','%'.$request->nbinportador.'%')
                ->orwhere('paises.codigo_iso','like','%'.$request->pais.'%');})
            ->get();*/
        /*$informacion=Inteligencia::where('descripcion_comercial','like','%'.$request->nbcomercial.'%')
        ->where('partida_arancelaria','like','%'.$request->ptarancelaria.'%')
        ->where('exportador','like','%'.$request->nbexportador.'%')
        ->where('importador','like','%'.$request->nbinportador.'%')
        ->get();
        dd($informacion);*/
        
        //dd($posts);
        /*$informacions = DB::table('busquedas')
            ->orwhere('busquedas.partida','like','%'.$request->ptarancelaria.'%')
            //->where('busquedas.exportador','like','%'.$request->nbexportador.'%')
            ->orwhere('busquedas.inportador','like','%'.$request->nbinportador.'%')
            ->orwhere('busquedas.nombre_comercial','like','%'.$request->nbcomercial.'%')
            ->get();
        return view('layouts.buscar',compact('informacions'));*/
        
        
        /*$informacions = DB::table('busquedas')
            ->where('busquedas.partida','like','%'.$request->ptarancelaria.'%')
            //->where('busquedas.exportador','like','%'.$request->nbexportador.'%')
            ->orwhere('busquedas.inportador','like','%'.$request->nbinportador.'%')
            ->where('busquedas.nombre_comercial','like','%'.$request->nbcomercial.'%')
            ->where('busquedas.pais','like','%'.$request->pais.'%')
            ->paginate(10);
        return view('layouts.buscar',compact('informacions'));*/

        $informacions = DB::table('busquedas')
            ->where('busquedas.pais','like','%'.$request->pais.'%')
            ->where('busquedas.partida','like','%'.$request->ptarancelaria.'%')
            ->where('busquedas.nombre_comercial','like','%'.$request->nbcomercial.'%')
            ->where('busquedas.inportador','like','%'.$request->nbinportador.'%')
            ->paginate(10);
        return view('layouts.buscar',compact('informacions'));
    }
}
