<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'adm_id', // Custom and Add Code
        'adm_name',
        'adm_email',
        'adm_password',
        'adm_level'
    ];

    protected $hidden = [
        'adm_password', 'remember_token',
    ];

    protected $guard = 'admin';

    protected $casts = [];
}
