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
            $table->string('productLevel');
            $table->longText('productDescription');
            $table->longText('productMaterials');
            $table->decimal('productPrice', 8, 2);
            $table->string('productImage');
            $table->string('location');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
