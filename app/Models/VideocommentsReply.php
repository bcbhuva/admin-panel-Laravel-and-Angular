<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VideocommentsReply
 */
class VideocommentsReply extends Model
{
    protected $table = 'videocomments_replys';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'by_id',
        'by_username',
        'videocomment_id',
        'comment_reply',
        'todays_date',
        'edit_user_id',
        'flag_counter'
    ];

    protected $guarded = [];

        
}