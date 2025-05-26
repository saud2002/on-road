<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'nic',
        'gender',
        'date_of_birth',
        'email',
        'phone_number',
        'location',
    ];
}
