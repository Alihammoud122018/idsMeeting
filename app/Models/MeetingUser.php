<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingUser extends Model
{
    protected $table = 'MeetingUser';

    public $timestamps = false;

    protected $fillable = ['name', 'email', 'password', 'role', 'createdate'];
}
