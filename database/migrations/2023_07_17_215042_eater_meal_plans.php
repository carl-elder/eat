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
         * Add meal plan table
         */
        Schema::create('eater_meal_plans', function(Blueprint $table){
            $table->foreignId('user_id')
                ->constrained('users','id');
            $table->foreignId('meal_id')
                ->constrained('meals', 'id');
            $table->date('created_at');
            $table->integer('review_score')->nullable();
            $table->multiLineString('review')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eater_meal_plans');
    }
};


