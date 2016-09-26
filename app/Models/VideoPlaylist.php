<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VideoPlaylist
 */
class VideoPlaylist extends Model
{
    protected $table = 'video_playlist';

    protected $primaryKey = 'list_id';

	public $timestamps = false;

    protected $fillable = [
        'list_name',
        'user_id'
    ];

    protected $guarded = [];

        
}