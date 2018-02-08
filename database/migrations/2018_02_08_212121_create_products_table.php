<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string("aduana")->nulleable();
            $table->string("feature")->nulleable();
            $table->string("state")->nulleable();
            $table->string("brand")->nulleable();
            $table->string("model")->nulleable();
            $table->string("importer")->nulleable();
            $table->string("provider")->nulleable();
            $table->string("money")->nulleable();
            $table->double("gross_amount", 10, 4)->nulleable();
            $table->double("net_amount", 10, 4)->nulleable();
            $table->double("fob_unit", 10, 4)->nulleable();
            $table->string("country")->nulleable();
            $table->string("port")->nulleable();
            $table->string("trade_name")->nulleable();
            $table->integer("number")->nulleable();
            $table->dateTime("date")->nulleable();
            $table->integer("quantity")->nulleable();
            $table->integer("unit")->nulleable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
