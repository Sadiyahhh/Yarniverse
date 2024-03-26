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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('reviewID')->autoIncrement();
            $table->integer('userID')->references('id')->on('users');
            $table->integer('productID')->references('id')->on('products');
            $table->string('reviewTitle');
            $table->longText('reviewDescription');
            $table->date('reviewDate');

            // $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('productID')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
