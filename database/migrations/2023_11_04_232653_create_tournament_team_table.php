<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('team_tournament', function (Blueprint $table) {
            $table->primary(['team_id', 'tournament_id']);
            $table->bigInteger('tournament_id')->unsigned();
            $table->bigInteger('team_id')->unsigned();

            $table->foreign('tournament_id')->references('id')->on('tournaments')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('team_id')->references('id')->on('teams')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournament_team');
    }
};


