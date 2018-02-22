<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    //
    protected $table = "paises";
    public $timestamps =false;

    //realizamos la relacion many ot many muchos a muchos

    public function inteligencias(){
        return $this -> hasMany('App\Inteligencia');
    }
}
