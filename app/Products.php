<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = "products";
    protected $fillable = ["aduana","feature","state","brand","model","importer","provider","money","gross_amount","net_amount","fob_unit","country","port","trade_name","number","date","quantity","unit"];

    
}
