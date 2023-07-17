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
         * Food table lists all known foods, their nutritional value, allergen warnings, shelf-life, and more
         */
        Schema::create('foods', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('countries_of_origin');
            $table->jsonb('nutritional_information');
            $table->integer('shelf_life');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
