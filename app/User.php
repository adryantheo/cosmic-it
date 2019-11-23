<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport;

class User extends Authenticatable
{
    use Notifiable, HasApiToken;

    
    protected $fillable = [
        'name', 'email', 'password', 'score',
    ];

   
    protected $hidden = [
        'password', 'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
