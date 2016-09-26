<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PollIndex
 */
class PollIndex extends Model
{
    protected $table = 'poll_index';

    protected $primaryKey = 'poll_id';

	public $timestamps = false;

    protected $fillable = [
        'question',
        'timestamp',
        'status',
        'logging',
        'exp_time',
        'expire',
        'comments'
    ];

    protected $guarded = [];

        
}