<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class MeetingUser extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'MeetingUser';

    public $timestamps = false;

    protected $fillable = ['name', 'email', 'password', 'role', 'createdate'];

    protected $hidden = ['password']; 
}
