<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MmSubMatch
 */
class MmSubMatch extends Model
{
    protected $table = 'mm_sub_matches';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'user_id',
        'media_id',
        'media_type',
        'match_type',
        'date_created'
    ];

    protected $guarded = [];

        
}