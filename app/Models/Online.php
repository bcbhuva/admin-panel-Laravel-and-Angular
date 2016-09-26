<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Online
 */
class Online extends Model
{
    protected $table = 'online';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'user_ip',
        'cookie',
        'session',
        'last_active',
        'last_seen',
        'logged_in_id',
        'logged_in_username'
    ];

    protected $guarded = [];

        
}