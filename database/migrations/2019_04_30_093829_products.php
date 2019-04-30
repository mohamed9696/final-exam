<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('products', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('size');
            $table->float('price');
            $table->integer('catogrey_id')->unsigned();
            $table->foreign('catogrey_id')->references('id')->on('catogires');
           
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
