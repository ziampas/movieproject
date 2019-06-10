<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('movies', function (Blueprint $table) {
          $table->increments('id');
          $table->string('moviesname');
          $table->date('movieyear');
          $table->string('movieplot');
          $table->string('moviepicture');
          $table->integer('user_id')->unsigned();
      });
      Schema::table('movies', function ($table){
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('movies');
    }
}
