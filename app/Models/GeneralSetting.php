<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GeneralSetting
 */
class GeneralSetting extends Model
{
    protected $table = 'general_settings';

    public $timestamps = false;

    protected $fillable = [
        'site_name',
        'site_base_url',
        'delete_original',
        'delete_avi',
        'path_to_mencoder',
        'path_to_ffmpeg',
        'path_to_flvtool2',
        'auto_play_index',
        'auto_play',
        'video_buffer_time',
        'allow_multiple_video_comments',
        'maximum_size',
        'maximum_size_human_readale',
        'auto_approve_profile_photo',
        'debug_mode',
        'from_system_name',
        'notifications_from_email',
        'search_page_limits',
        'groups_main_limit',
        'groups_home_video_limit',
        'comment_page_limits',
        'see_more_limits',
        'date_format',
        'auto_approve_videos',
        'admin_maximum_display',
        'flagging_threshold_limits',
        'seemore_limits_wide',
        'allow_download',
        'enable_audio',
        'path_to_php',
        'log_encoder',
        'config_recent_title_length',
        'play_list_bottom_ad'
    ];

    protected $guarded = [];

        
}