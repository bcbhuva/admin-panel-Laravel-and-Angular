<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AudiocommentsReply
 */
class AudiocommentsReply extends Model
{
    protected $table = 'audiocomments_replys';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'by_id',
        'by_username',
        'audiocomment_id',
        'comment_reply',
        'todays_date'
    ];

    protected $guarded = [];

        
}