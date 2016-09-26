<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 */
class Setting extends Model
{
    protected $table = 'settings';

    public $timestamps = false;

    protected $fillable = [
        'dayColor',
        'weekendColor',
        'todayColor',
        'eventColor',
        'iteratorColor1',
        'iteratorColor2'
    ];

    protected $guarded = [];

        
}