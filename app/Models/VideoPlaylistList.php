<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VideoPlaylistList
 */
class VideoPlaylistList extends Model
{
    protected $table = 'video_playlist_lists';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'list_id',
        'user_id',
        'video_id',
        'video_file_name',
        'video_position'
    ];

    protected $guarded = [];

        
}