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
        Schema::create('followers', function (Blueprint $table) {
            $table->primary(['player_id', 'follower_id']);
            $table->string('name');
            $table->string('email');
            $table->bigInteger('favourite_player')->unsigned();
            $table->timestamps();

            $table->foreign('player_id')->references('id')->on('followers')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('favourite_player')->references('id')->on('players')
                ->onDelete('cascade')->onUpdate('cascade');
                
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('followers');
    }
};
