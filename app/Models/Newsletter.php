<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Newsletter
 */
class Newsletter extends Model
{
    protected $table = 'newsletter';

    public $timestamps = false;

    protected $fillable = [
        'message',
        'subject'
    ];

    protected $guarded = [];

        
}