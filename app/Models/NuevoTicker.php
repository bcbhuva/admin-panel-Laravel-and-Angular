<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NuevoTicker
 */
class NuevoTicker extends Model
{
    protected $table = 'nuevo__ticker';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'text',
        'start',
        'runtime',
        'url',
        'target',
        'position',
        'addtime',
        'active',
        'opacity',
        'scrollspeed'
    ];

    protected $guarded = [];

        
}