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
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('delivery_id')->constrained('deliveries');
            $table->string('from');
            $table->string('to');
            $table->string('price');
            $table->string('status');
            $table->string('tracking_id');
            $table->string('shipping_date');
            $table->string('receiving_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippings');
    }
};
