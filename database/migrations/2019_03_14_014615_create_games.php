<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Games', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('Name')->comment('Game Name');
            $table->Integer('manfacturerId')->default('No Name');
            $table->Integer('gameTypeId');
            $table->integer('minPlayers');
            $table->integer('maxPlayers');
            $table->integer('minAge');
            $table->string('maxAge');
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
        Schema::dropIfExists('Games');
    }
}
