<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PollUser
 */
class PollUser extends Model
{
    protected $table = 'poll_user';

    protected $primaryKey = 'user_id';

	public $timestamps = false;

    protected $fillable = [
        'username',
        'userpass',
        'session',
        'last_visit'
    ];

    protected $guarded = [];

        
}