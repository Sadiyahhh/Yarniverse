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
        Schema::create('baskets', function (Blueprint $table) {
            $table->id('basketID')->autoIncrement();
            $table->integer('userID')->references('id')->on('users');
            $table->integer('productID')->references('id')->on('products');
            // $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('productID')->references('id')->on('products')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('total', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baskets');
    }
};
