<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inteligencia extends Model
{
    //
    protected $table = "inteligencia";
    public $timestamps =false;
    //definimos la elaciones many to many muchos a muchos
    public function paises(){
        return $this -> hasMany('App\Pais');
    }
}
