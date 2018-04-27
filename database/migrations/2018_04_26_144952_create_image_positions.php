<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagePositions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('image_positions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('layout', 100);
            $table->integer('position');
            $table->integer('width');
            $table->integer('height');
            $table->integer('posx');
            $table->integer('posy');
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
        Schema::dropIfExists('image_positions');
    }
}
