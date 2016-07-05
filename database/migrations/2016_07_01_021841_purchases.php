<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Purchases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('purchases', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('credit_card');
            $table->integer('zip');
            $table->integer('user_id');
            $table->integer('sale_id');             
            $table->timestamps();       
            
        });       //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('purchases');
    }
}
