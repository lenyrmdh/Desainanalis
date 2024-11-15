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
            $table->id(); // Primary Key
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Foreign Key to Products Table
            $table->integer('quantity');
            $table->decimal('total_price', 15, 2); // Total price of the order
            $table->timestamp('order_date')->useCurrent(); // Order date with default value of current timestamp
            $table->timestamps(); // Created_at and updated_at
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
