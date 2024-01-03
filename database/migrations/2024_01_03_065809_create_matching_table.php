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
        Schema::create('matching', function (Blueprint $table) {
            $table->increments('Matching_ID');
            $table->string('AwayClub', 100);
            $table->unsignedInteger('Stadium_ID')->nullable();
            $table->foreign('Stadium_ID')->references('Stadium_ID')->on('stadiums')->onDelete('cascade');
            $table->date('MatchDate');
            $table->time('MatchTime');
            $table->integer('GoalsScored')->default(0);
            $table->integer('GoalsConceded')->default(0);
            $table->string('Result', 5);
            $table->string('State', 100);
            $table->integer('Host')->default(0);
            $table->integer('RemainingSeats')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matching');
    }
};
