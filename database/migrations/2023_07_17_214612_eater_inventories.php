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
         * Add eater inventory table
         */
        Schema::create('eater_inventories', function(Blueprint $table){
            $table->foreignId('user_id')
                ->constrained('users', 'id');
            $table->foreignId('food_id')
                ->constrained('foods', 'id');
            $table->integer('qty');
            $table->string('unit');
            $table->date('purchase_date')->nullable();
            $table->date('estimated_purchase_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->date('estimated_expiration_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eater_inventories');
    }
};
