<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AudiocommentsRating
 */
class AudiocommentsRating extends Model
{
    protected $table = 'audiocomments_rating';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'user_id',
        'IP',
        'comment_id'
    ];

    protected $guarded = [];

        
}