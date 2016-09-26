<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VideoSetting
 */
class VideoSetting extends Model
{
    protected $table = 'video_settings';

    public $timestamps = false;

    protected $fillable = [
        'video_watermark',
        'video_watermark_place',
        'video_resize',
        'video_convert_pass',
        'video_ffmpeg_size',
        'video_ffmpeg_bit_rate',
        'video_ffmpeg_audio_rate',
        'video_ffmpeg_high_quality',
        'video_ffmpeg_hq',
        'video_ffmpeg_hq_size',
        'video_ffmpeg_qmax',
        'video_mencoder_vbitrate',
        'video_mencoder_scale',
        'video_mencoder_srate',
        'video_mencoder_audio_rate'
    ];

    protected $guarded = [];

        
}