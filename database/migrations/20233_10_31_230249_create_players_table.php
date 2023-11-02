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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('in_game_name');
            $table->date('date_of_birth')->nullable();
            $table->string('roles');
            $table->string('country');
            $table->bigInteger('team_id')->unsigned();
            $table->timestamps();

            $table->foreign('team_id')->references('id')->on('teams')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
