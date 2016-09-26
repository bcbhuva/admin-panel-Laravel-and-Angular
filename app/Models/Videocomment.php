<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Videocomment
 */
class Videocomment extends Model
{
    protected $table = 'videocomments';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'by_id',
        'by_username',
        'edit_user_id',
        'video_id',
        'comments',
        'todays_date',
        'allow_ratings',
        'rating_number_votes',
        'rating_total_points',
        'updated_rating',
        'flag_counter'
    ];

    protected $guarded = [];

        
}