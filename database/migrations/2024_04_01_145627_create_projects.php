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
        Schema::create('projects', function (Blueprint $table) {
            $table->id('projectID')->autoIncrement();
            $table->integer('userID')->references('id')->on('users');
            $table->string('projectTitle');
            $table->longText('projectDescription');
            $table->mediumText('image')->nullable();
            $table->longText('notes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
