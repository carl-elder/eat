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
         * Eaters' nutrition table guides meal results based on user-provided requirements - and prevents known
         * allergens from being recommended in meals
         */
        Schema::create('eaters_nutrition', function(Blueprint $table){
            $table->foreignId('user_id')
                ->constrained('users', 'id');
            $table->integer('daily_calories')->nullable();
            $table->integer('daily_fat');
            $table->integer('daily_carb');
            $table->integer('daily_protein');
            $table->string('daily_unit');
            $table->jsonb('allergens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eaters_nutrition');
    }
};
