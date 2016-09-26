<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MessagesSent
 */
class MessagesSent extends Model
{
    protected $table = 'messages_sent';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'to_username',
        'subject',
        'message',
        'todays_date',
        'from_id'
    ];

    protected $guarded = [];

        
}