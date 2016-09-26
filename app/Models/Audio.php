<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Audio
 */
class Audio extends Model
{
    protected $table = 'audios';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'audio_id',
        'album_id',
        'title',
        'title_seo',
        'artist',
        'description',
        'tags',
        'audio_length',
        'cat_id',
        'channel',
        'album',
        'album_year',
        'location_recorded',
        'allow_comments',
        'allow_embedding',
        'public_private',
        'date_uploaded',
        'allow_ratings',
        'rating_number_votes',
        'rating_total_points',
        'updated_rating',
        'approved',
        'number_of_views',
        'user_id',
        'featured',
        'playtime',
        'flag_counter',
        'media_location',
        'media_quality'
    ];

    protected $guarded = [];

        
}