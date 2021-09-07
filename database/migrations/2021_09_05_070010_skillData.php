<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class skillData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skillData', function (Blueprint $table) {
            $table->bigIncrements('id_skill');
            $table->text('title');
            $table->text('desc');
            $table->integer('scores');
            $table->dateTime('last_used_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('skillData');

    }
}
