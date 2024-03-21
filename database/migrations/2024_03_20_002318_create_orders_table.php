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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('orderID')->autoIncrement();
            $table->integer('userID')->references('id')->on('users');
            // $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->string('username');
            $table->decimal('orderTotal', 8, 2);
            $table->string('status')->default('pending');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            //
        });
    }
};
