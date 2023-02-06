<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
=======
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
>>>>>>> master
{
    use HasFactory;
    use Notifiable;

<<<<<<< HEAD
=======
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
>>>>>>> master
    protected $fillable = [
        'adm_id', // Custom and Add Code
        'adm_name',
        'adm_email',
        'adm_password',
<<<<<<< HEAD
        'adm_level'
    ];

    protected $hidden = [
        'adm_password', 'remember_token',
=======
        'adm_level',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'adm_password',

>>>>>>> master
    ];

    protected $casts = [];
}
