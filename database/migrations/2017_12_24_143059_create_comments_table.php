<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('movie_id');
            $table->foreign('movie_id')
                  ->references('id')
                  ->on('movies');
            $table->text('content');
            $table->timestamps();
        });
    }

    /*
     * Polja u tabeli: id, movie_id, content, created_at
        Obratiti pažnju da je movie_id strani ključ
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
