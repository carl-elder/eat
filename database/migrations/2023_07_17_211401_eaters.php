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
         * Add EaterController table for defining eater-specific data
         */
        Schema::create('eaters', function(Blueprint $table){
            $table->foreignId('user_id')
                ->constrained('users', 'id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('image');
            $table->string('telephone')->nullable();
            $table->string('street');
            $table->string('street_two')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('country');
            $table->date('birthdate')->nullable();
            $table->string('gender')->nullable();
            $table->boolean('has_siblings');
            $table->boolean('has_inventory');
            $table->boolean('has_history');
            $table->boolean('has_meal_plans');
            $table->boolean('has_nutritional_pref');
            $table->boolean('has_budget');
            $table->boolean('has_allergens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eaters');
    }
};
