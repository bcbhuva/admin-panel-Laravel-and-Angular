<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MmSub
 */
class MmSub extends Model
{
    protected $table = 'mm_subs';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'user_id',
        'member_id',
        'channel_id',
        'sub_channel_id',
        'group_id',
        'tags',
        'via',
        'frequency',
        'date_created'
    ];

    protected $guarded = [];

        
}