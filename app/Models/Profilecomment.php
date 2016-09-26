<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profilecomment
 */
class Profilecomment extends Model
{
    protected $table = 'profilecomments';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'by_id',
        'by_username',
        'members_id',
        'comments',
        'todays_date',
        'flag_counter',
        'rating_number_votes',
        'rating_total_points',
        'updated_rating'
    ];

    protected $guarded = [];

        
}