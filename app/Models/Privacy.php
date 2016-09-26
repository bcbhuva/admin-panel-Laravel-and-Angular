<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Privacy
 */
class Privacy extends Model
{
    protected $table = 'privacy';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'videocomments',
        'profilecomments',
        'privatemessage',
        'friendsinvite',
        'newsletter',
        'user_id',
        'publicfavorites',
        'publicplaylists'
    ];

    protected $guarded = [];

        
}