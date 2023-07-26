<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        // Create the roles and permissions for eaters, grocers, and admin
        UserRole::create(['name' => 'eater']);
        UserRole::create(['name' => 'grocer']);
        UserRole::create(['name' => 'admin']);
    }
}
