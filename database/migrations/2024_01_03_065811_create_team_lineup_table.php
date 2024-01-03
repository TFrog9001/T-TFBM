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
        Schema::create('team_lineup', function (Blueprint $table) {
            $table->increments('Lineup_ID');
            $table->unsignedInteger('Matching_ID');
            $table->string('User_ID', 10);
            $table->string('Position', 100);
            $table->boolean('IsStartingPlayer');
            $table->string('Formation', 10);
            $table->foreign('Matching_ID')->references('Matching_ID')->on('matching')->onDelete('cascade');
            $table->foreign('User_ID')->references('User_ID')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_lineup');
    }
};
