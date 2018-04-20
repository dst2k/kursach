<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterLayouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('layouts', function (Blueprint $table) {
            $table->integer('img_quantity')->unsigned()->after('layout');
            
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('layouts', function (Blueprint $table) {
            $table->dropColumn('img_quantity');

         });
    }
}
