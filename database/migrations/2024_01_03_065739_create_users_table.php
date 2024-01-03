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
        Schema::create('users', function (Blueprint $table) {
            $table->string('User_ID', 10)->primary();
            $table->string('Name', 50);
            $table->string('Password', 100);
            $table->date('DateOfBirth')->nullable();
            $table->string('Nationality', 100)->nullable();
            $table->unsignedInteger('Role_ID')->nullable();
            $table->foreign('Role_ID')->references('Role_ID')->on('roles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
