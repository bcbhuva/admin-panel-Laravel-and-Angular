<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Audiocomment
 */
class Audiocomment extends Model
{
    protected $table = 'audiocomments';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'by_id',
        'by_username',
        'audio_id',
        'comments',
        'todays_date',
        'flag_counter',
        'rating_number_votes',
        'rating_total_points',
        'updated_rating'
    ];

    protected $guarded = [];

        
}