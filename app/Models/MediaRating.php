<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MediaRating
 */
class MediaRating extends Model
{
    protected $table = 'media_rating';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'user_id',
        'IP',
        'media_id',
        'media_type'
    ];

    protected $guarded = [];

        
}