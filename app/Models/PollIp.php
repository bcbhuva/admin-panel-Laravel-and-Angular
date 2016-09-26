<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PollIp
 */
class PollIp extends Model
{
    protected $table = 'poll_ip';

    protected $primaryKey = 'ip_id';

	public $timestamps = false;

    protected $fillable = [
        'poll_id',
        'ip_addr',
        'timestamp'
    ];

    protected $guarded = [];

        
}