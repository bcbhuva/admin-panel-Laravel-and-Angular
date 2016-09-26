<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NuevoOverlay
 */
class NuevoOverlay extends Model
{
    protected $table = 'nuevo__overlay';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'title',
        'media',
        'url',
        'target',
        'start',
        'runtime',
        'active',
        'addtime',
        'expire',
        'owner',
        'email',
        'channel',
        'views',
        'hits'
    ];

    protected $guarded = [];

        
}