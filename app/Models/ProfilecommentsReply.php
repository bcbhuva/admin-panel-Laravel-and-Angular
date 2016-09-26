<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProfilecommentsReply
 */
class ProfilecommentsReply extends Model
{
    protected $table = 'profilecomments_replys';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'by_id',
        'by_username',
        'profilecomment_id',
        'comment_reply',
        'todays_date'
    ];

    protected $guarded = [];

        
}