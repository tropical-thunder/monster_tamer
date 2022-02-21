<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMonsterIdAndSyubetuToZukandata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monster_data', function (Blueprint $table) {
            //
             $table->integer('monster_id');
            $table->string('syubetsu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('monster_data', function (Blueprint $table) {
            //
        });
    }
}
