<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Genre
 */
class Genre extends Model
{
    protected $table = 'genre';

    protected $primaryKey = 'channel_id';

	public $timestamps = false;

    protected $fillable = [
        'channel_name',
        'channel_description',
        'date_created',
        'active',
        'has_audio',
        'channel_picture'
    ];

    protected $guarded = [];

        
}