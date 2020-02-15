<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('team_a_id');
            $table->foreign('team_a_id')
                ->references('id')->on('teams')
                ->onDelete('cascade');

            $table->unsignedBigInteger('team_b_id');
            $table->foreign('team_b_id')
                ->references('id')->on('teams')
                ->onDelete('cascade');
            $table->unsignedBigInteger('team_a_score');
            $table->unsignedBigInteger('team_b_score');

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
        Schema::dropIfExists('matches');
    }
}
