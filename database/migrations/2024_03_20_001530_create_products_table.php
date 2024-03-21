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
        Schema::create('products', function (Blueprint $table) {
            $table->id('productID')->autoIncrement();
            $table->string('productName');
            $table->string('productCreator');
            $table->string('productCategory');
            $table->longText('productDescription');
            $table->decimal('productPrice', 8, 2);
            $table->string('productImage');

            $table->integer('ratingID')->references('id')->on('ratings');
            $table->integer('reviewID')->references('id')->on('reviews');
            // $table->foreign('ratingID')->references('id')->on('ratings')->onDelete('cascade');
            // $table->foreign('reviewID')->references('id')->on('reviews')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('products', function (Blueprint $table) {
            //
        });
    }
};
