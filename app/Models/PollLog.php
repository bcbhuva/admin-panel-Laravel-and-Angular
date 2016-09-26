<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PollLog
 */
class PollLog extends Model
{
    protected $table = 'poll_log';

    protected $primaryKey = 'log_id';

	public $timestamps = false;

    protected $fillable = [
        'poll_id',
        'option_id',
        'timestamp',
        'ip_addr',
        'host',
        'agent'
    ];

    protected $guarded = [];

        
}