<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inteligencia extends Model
{
    //
    protected $table = "inteligencia";
    public $timestamps =false;
    protected $fillable = ['puerto', 'partida_arancelaria', 'inportador', 'exportador', 'fecha_transmision'];
    //definimos la elaciones many to many muchos a muchos
    public function paises(){
        return $this -> hasMany('App\Pais');
    }
    public function scopeBusqueda($query,$valor){
        $resultado = $query->where("exportador","LIKE","%$valor%");
        return $resultado;
    }
}
