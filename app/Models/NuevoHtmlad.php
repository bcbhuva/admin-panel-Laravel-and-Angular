<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NuevoHtmlad
 */
class NuevoHtmlad extends Model
{
    protected $table = 'nuevo__htmlad';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ad_name',
        'ad_type',
        'ad_menu',
        'ad_method',
        'ad_timer',
        'midroll_start',
        'back_color',
        'progress_color',
        'bar_offset',
        'ad_width',
        'ad_height',
        'ad_position',
        'ad_closepic',
        'ad_closeoffset',
        'ad_content',
        'channel',
        'expire',
        'addtime',
        'active'
    ];

    protected $guarded = [];

        
}