<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $hidden = [
        'password',
        'email_verified_at',
    ];

    public function scopeOfId($query, $admin_id)
    {
        return $query->where('id', $admin_id);
    }
}
