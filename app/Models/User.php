<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Traits\User\Functions;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRolesAndAbilities, Functions;

    protected $guarded = [];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    
}
