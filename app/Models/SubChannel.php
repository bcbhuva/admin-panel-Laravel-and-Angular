<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SubChannel
 */
class SubChannel extends Model
{
    protected $table = 'sub_channels';

    protected $primaryKey = 'sub_channel_id';

	public $timestamps = false;

    protected $fillable = [
        'has_vids',
        'parent_channel_id',
        'sub_channel_name',
        'sub_channel_name_seo',
        'sub_channel_description',
        'date_created',
        'sub_channel_picture'
    ];

    protected $guarded = [];

        
}