<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Admin extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'picture', // أو أي أعمدة أخرى في جدول admins
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}