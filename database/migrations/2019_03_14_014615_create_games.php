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
            $table->BigIncrements('id');
            $table->string('Name', 255)->comment('Game Name');
            $table->smallInteger('min_age',false, true)->default(1)->comment('minimum player age');
            $table->smallInteger('max_age',false, true)->nullable()->comment("maximum player age");

            $table->smallInteger('min_player',false,true)->default(1)->comment('minimum player ');
            $table->smallInteger('max_player',false, true)->nullable()->comment("maximum player ");

            $table->integer('game_type_id',false, true)->default(0)->comment('id from game type');
            $table->integer('manufacturer_id',false,true)->default(0)->comment('id from manufacturers');
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
