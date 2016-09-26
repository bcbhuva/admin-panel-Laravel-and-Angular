<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MmMobile
 */
class MmMobile extends Model
{
    protected $table = 'mm_mobile';

    public $timestamps = false;

    protected $fillable = [
        'theme',
        'lang',
        'slider_type',
        'list_type',
        'slider_number',
        'list_number',
        'page_limit',
        'maxfps',
        'maxbitrate',
        'maxwidth',
        'maxheight',
        'cron_minutes',
        'conv_presets',
        'mp4box',
        'salt',
        'html_tags',
        'enable_audio',
        'enable_photos',
        'enable_blogs',
        'enable_welcome',
        'placeholder',
        'siteadmin_dir',
        'debug',
        'ak'
    ];

    protected $guarded = [];

        
}