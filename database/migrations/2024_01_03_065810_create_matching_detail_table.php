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
        Schema::create('matching_detail', function (Blueprint $table) {
            $table->unsignedInteger('Matching_ID');
            $table->string('PlayerName', 10);
            $table->integer('JerseyNumber');
            $table->integer('IsAway');
            $table->string('Type', 100);
            $table->timestamp('Time')->useCurrent();
            $table->foreign('Matching_ID')->references('Matching_ID')->on('matching')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matching_detail');
    }
};
