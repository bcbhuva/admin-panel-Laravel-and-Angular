<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Login
 */
class Login extends Model
{
    protected $table = 'login';

    public $timestamps = false;

    protected $fillable = [
        'token',
        'hora',
        'user_ip',
        'user_level'
    ];

    protected $guarded = [];

        
}