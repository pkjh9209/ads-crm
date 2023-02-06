<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use HasFactory;
    use Notifiable;

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

    protected $casts = [];
}
