<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NuevoMidroll
 */
class NuevoMidroll extends Model
{
    protected $table = 'nuevo__midroll';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'owner',
        'email',
        'channel',
        'duration',
        'title',
        'description',
        'url',
        'link',
        'image',
        'added',
        'expire',
        'active',
        'views',
        'hits'
    ];

    protected $guarded = [];

        
}