<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateGametablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_gametables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('Game name');
            $table->unsignedBigInteger('manufacturer_id');
            $table->unsignedInteger('min_age');
            $table->unsignedInteger('max_age')->nullable();
            $table->unsignedInteger('min_players');
            $table->unsignedInteger('max_player')->nullable();
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
        Schema::dropIfExists('create_gametables');
    }
}
