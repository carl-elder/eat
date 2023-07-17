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
        /**
         * Add Stores table for defining grocer's store-specific data
         */
        Schema::create('stores', function(Blueprint $table) {
            $table->bigIncrements('store_id');
            $table->foreignId('account')
                ->constrained('grocers', 'account_number');
            $table->string('store_name')->nullable();
            $table->string('telephone')->nullable();
            $table->string('street');
            $table->string('street_two')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('country');
            $table->json('hours');
            $table->boolean('has_inventory');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
