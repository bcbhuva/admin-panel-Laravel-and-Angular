<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Video
 */
class Video extends Model
{
    protected $table = 'videos';

    protected $primaryKey = 'indexer';

	  public $timestamps = false;

    protected $fillable = [
        'video_id',
        'type',
        'response_id',
        'channel_id',
        'sub_channel_id',
        'user_id',
        'viewtime',
        'title',
        'title_seo',
        'description',
        'tags',
        'channel',
        'date_recorded',
        'date_uploaded',
        'location_recorded',
        'video_length',
        'allow_comments',
        'allow_embedding',
        'allow_ratings',
        'rating_number_votes',
        'rating_total_points',
        'updated_rating',
        'public_private',
        'approved',
        'number_of_views',
        'featured',
        'promoted',
        'flag_counter',
        'video_type',
        'embed_id',
        'media_location',
        'media_quality'
    ];

    protected $guarded = [];


}
