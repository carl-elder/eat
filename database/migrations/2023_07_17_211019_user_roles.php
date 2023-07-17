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
         * Add Role table for defining user roles.
         */
        Schema::create('user_roles', function(Blueprint $table){
            $table->unsignedBigInteger('id')->unique();
            $table->string('role_name')->unique();
            $table->json('role_permissions');
            $table->string('login_route');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_roles');
    }
};
