<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PollComment
 */
class PollComment extends Model
{
    protected $table = 'poll_comment';

    protected $primaryKey = 'com_id';

	public $timestamps = false;

    protected $fillable = [
        'poll_id',
        'time',
        'host',
        'browser',
        'name',
        'email',
        'message'
    ];

    protected $guarded = [];

        
}