<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VideocommentsRating
 */
class VideocommentsRating extends Model
{
    protected $table = 'videocomments_rating';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'user_id',
        'IP',
        'comment_id'
    ];

    protected $guarded = [];

        
}