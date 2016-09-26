<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Flagging
 */
class Flagging extends Model
{
    protected $table = 'flagging';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'user_id',
        'flag_type',
        'content_id',
        'today_date'
    ];

    protected $guarded = [];

        
}