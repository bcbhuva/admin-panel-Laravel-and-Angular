<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ViewsTracker
 */
class ViewsTracker extends Model
{
    protected $table = 'views_tracker';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'ipaddress',
        'location',
        'media_type',
        'media_id',
        'date_viewed'
    ];

    protected $guarded = [];

        
}