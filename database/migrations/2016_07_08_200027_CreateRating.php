<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('Rating', function(Blueprint $table)
        {
            $table->increments('id');            
            $table->Integer('calification');
            $table->text('user_id');
                                     
            $table->timestamps();       
            
        }); 
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           Schema::drop('Rating');
    }
}
