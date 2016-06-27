<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('Sales', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('titulo');
            $table->string('archivo');
            $table->integer('usuario');
            $table->integer('codigo');
            $table->integer('estado'); 
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
         Schema::drop('Sales');
    }
}
