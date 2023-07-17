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
         * Meal table is built by combining known foods. Returns href to cooking instructions.
         */
        Schema::create('meals', function(Blueprint $table){
            $table->id();
            $table->multilineString('description')->nullable();
            $table->string('countries_of_origin')->nullable();
            $table->json('ingredients');
            $table->multiLineString('instructions');
            $table->decimal('review_average');
            $table->string('primary_image');
            $table->string('images');
            $table->json('nutritional_information');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meals');
    }
};
