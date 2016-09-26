<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProfilecommentsRating
 */
class ProfilecommentsRating extends Model
{
    protected $table = 'profilecomments_rating';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'user_id',
        'IP',
        'comment_id'
    ];

    protected $guarded = [];

        
}