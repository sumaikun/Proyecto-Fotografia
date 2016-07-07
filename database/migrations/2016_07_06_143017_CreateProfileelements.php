<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileelements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('Portada', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('cover');
            $table->string('info1title');
            $table->string('info1');
            $table->String('pic1title');
            $table->String('pic1');
            $table->String('pic1comment');
            $table->String('audiotitle');
            $table->String('audio');
            $table->String('info2title');
            $table->String('info2');
            $table->String('pic2title');
            $table->String('pic2');
            $table->String('pic2comment');
            $table->Integer('user_id');                         
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
         Schema::drop('Portada');
    }
}

