<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Channel
 */
class Channel extends Model
{
    protected $table = 'channels';

    protected $primaryKey = 'channel_id';

	public $timestamps = false;

    protected $fillable = [
        'channel_name',
        'channel_name_seo',
        'channel_description',
        'date_created',
        'channel_picture'
    ];

    protected $guarded = [];

        
}