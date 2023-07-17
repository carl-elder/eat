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
         * Modify default users table. Name will have different formats based on user type.
         */
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'name')) {
                $table->dropColumn('name');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        if (!Schema::hasColumn('users','name')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('name');
            });
        }
    }
};
