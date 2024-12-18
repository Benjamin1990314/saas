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
        Schema::create('one_time_product_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('one_time_product_id')->constrained('one_time_products');
            $table->foreignId('currency_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('one_time_product_prices');
    }
};
