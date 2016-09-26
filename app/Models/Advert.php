<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Advert
 */
class Advert extends Model
{
    protected $table = 'adverts';

    public $timestamps = false;

    protected $fillable = [
        'ads_left',
        'ads_right',
        'ads_top',
        'ads_bottom',
        'preloaded',
        'ads_home_right'
    ];

    protected $guarded = [];

        
}