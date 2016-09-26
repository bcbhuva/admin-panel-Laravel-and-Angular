<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Favorite
 */
class Favorite extends Model
{
    protected $table = 'favorites';

    protected $primaryKey = 'indexer_fav';

	public $timestamps = false;

    protected $fillable = [
        'user_id',
        'video_id',
        'video_status',
        'owner_id'
    ];

    protected $guarded = [];

        
}