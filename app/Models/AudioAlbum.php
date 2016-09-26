<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AudioAlbum
 */
class AudioAlbum extends Model
{
    protected $table = 'audio_albums';

    protected $primaryKey = 'album_id';

	public $timestamps = false;

    protected $fillable = [
        'album_name',
        'album_name_seo',
        'album_description',
        'date_created',
        'public_private',
        'active',
        'genre_id',
        'has_audio',
        'album_picture'
    ];

    protected $guarded = [];

        
}