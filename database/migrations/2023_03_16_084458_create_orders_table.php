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
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('Address')->nullable();
            $table->string('user_id')->nullable();
            $table->string('Title')->nullable();
            $table->string('Price')->nullable();
            $table->string('Quantity')->nullable();
            $table->string('Image')->nullable();
            $table->string('product_id')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('Delivery_status')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
