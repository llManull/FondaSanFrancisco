<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Importa Authenticatable
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UsersLogin extends Authenticatable // Cambia Model a Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users_login';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}