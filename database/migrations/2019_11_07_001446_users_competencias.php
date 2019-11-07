<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersCompetencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_competencias', function (Blueprint $table) {
            $table->integer('usuer_id');
            $table->integer('competencias_id');

            $table->foreign('usuer_id')->references('id')->on('users');
            $table->foreign('competencias_id')->references('id')->on('competencias');
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
    }
}
