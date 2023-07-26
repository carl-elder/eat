<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    // ... Your UserRole model code ...

    /**
     * Get users with this role.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_role_user', 'role_id', 'user_id');
    }
}
