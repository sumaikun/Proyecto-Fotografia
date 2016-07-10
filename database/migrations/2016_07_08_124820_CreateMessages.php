<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('Messages', function(Blueprint $table)
        {
            $table->increments('id');            
            $table->string('title');
            $table->text('message');
            $table->Integer('send_id');
            $table->Integer('get_id');
            $table->Integer('state');                         
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
         Schema::drop('Messages');
    }
}
