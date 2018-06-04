<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Movies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        
        Schema::create('movies', function(Blueprint $table) 
        {
            $table->increments('movieId');
            $table->string('title');
            $table->date('released_on');
            $table->integer('rating');
            $table->string('review');	
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() 
    {
        
        Schema::drop('movies');

    }

}
