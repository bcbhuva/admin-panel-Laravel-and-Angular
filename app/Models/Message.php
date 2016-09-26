<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 */
class Message extends Model
{
    protected $table = 'messages';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'from_username',
        'subject',
        'message',
        'todays_date',
        'to_id',
        'email_read'
    ];

    protected $guarded = [];

        
}