<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NuevoPreroll
 */
class NuevoPreroll extends Model
{
    protected $table = 'nuevo__preroll';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'type',
        'channel',
        'url',
        'html5',
        'link',
        'runtime',
        'owner',
        'email',
        'added',
        'expire',
        'active',
        'hits',
        'views'
    ];

    protected $guarded = [];

        
}