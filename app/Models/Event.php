<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 */
class Event extends Model
{
    protected $table = 'event';

    public $timestamps = false;

    protected $fillable = [
        'body',
        'timestamp'
    ];

    protected $guarded = [];

        
}