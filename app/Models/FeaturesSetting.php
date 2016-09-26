<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FeaturesSetting
 */
class FeaturesSetting extends Model
{
    protected $table = 'features_settings';

    public $timestamps = false;

    protected $fillable = [
        'audio',
        'images',
        'blogs',
        'video_comments',
        'blog_comments',
        'audio_comments',
        'image_comments',
        'profile_comments',
        'stats',
        'confirmation_email',
        'custome_profile',
        'language',
        'theme'
    ];

    protected $guarded = [];

        
}