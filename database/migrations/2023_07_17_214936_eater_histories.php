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
         * Add eater history table
         */
        Schema::create('eater_histories', function(Blueprint $table){
            $table->foreignId('user_id')
                ->constrained('users', 'id');
            $table->foreignId('meal_id')
                ->constrained('meals','id');
            $table->date('created_at');
            $table->integer('meal_of_day')->nullable();
            $table->integer('review_score')->nullable();
            $table->multiLineString('review')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eater_histories');
    }
};
