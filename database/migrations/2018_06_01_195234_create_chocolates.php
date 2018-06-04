<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChocolates extends Migration 
{

    /**
     * Run the migrations
     * 
     * @return void
     */
    public function up() {

        Schema::create('chocolates', function(Blueprint $table) 
        {
            $table->string('type');
            $table->integer('calories');
            $table->integer('fat');
            $table->boolean('milk');
        });

    }

    /**
     * Reverse the migrations
     * 
     * @return void
     */
    public function down() {

        Schema::drop('chocolates');

    }


}



