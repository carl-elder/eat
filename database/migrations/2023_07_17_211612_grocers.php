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
         * Add GrocerController table for defining grocer-specific data
         */
        Schema::create('grocers', function(Blueprint $table) {
            $table->bigIncrements('account_number');
            $table->foreignId('user_id')
                ->constrained('users', 'id');
            $table->string('brand_name')->unique();
            $table->string('logo_image');
            $table->string('contact_name');
            $table->string('telephone');
            $table->string('street');
            $table->string('street_two')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('country');
            $table->boolean('has_locations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grocers');
    }
};
