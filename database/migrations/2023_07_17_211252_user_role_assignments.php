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
         * Add Role Assignment table for assigning new users to specific types.
         */
        Schema::create('user_role_assignments', function(Blueprint $table){
            $table->foreignId('user_id')
                ->constrained('users', 'id');
            $table->integer('user_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_role_assignments');
    }
};
