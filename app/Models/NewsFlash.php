<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsFlash
 */
class NewsFlash extends Model
{
    protected $table = 'news_flash';

    protected $primaryKey = 'news_id';

	public $timestamps = false;

    protected $fillable = [
        'date_created',
        'publish',
        'news_flash',
        'news_picture',
        'news_headline'
    ];

    protected $guarded = [];

        
}