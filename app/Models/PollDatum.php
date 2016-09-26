<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PollDatum
 */
class PollDatum extends Model
{
    protected $table = 'poll_data';

    public $timestamps = false;

    protected $fillable = [
        'poll_id',
        'option_id',
        'option_text',
        'color',
        'votes'
    ];

    protected $guarded = [];

        
}