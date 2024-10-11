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
            $table->unsignedBigInteger('customer_id');
            $table->string('order_number')->unique();
            $table->date('order_date');
            $table->string('receiver_name'); 
            $table->string('order_type');
            $table->text('shipping_address'); 
            $table->string('package_size');
            $table->string('package_weight'); 
            $table->text('delivery_instructions'); 
            $table->enum('status', ['pending', 'shipped', 'in transit', 'delivered', 'canceled'])
            ->default('pending'); 
            $table->timestamps();
            
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
