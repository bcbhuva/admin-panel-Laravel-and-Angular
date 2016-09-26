<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 */
class Permission extends Model
{
    protected $table = 'permissions';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'user_group',
        'edit_comments_video',
        'edit_comments_blog',
        'edit_comments_audio',
        'edit_comments_pictures',
        'edit_comments_group',
        'edit_comments_profile',
        'edit_details_member',
        'edit_details_video',
        'edit_details_audio',
        'edit_details_album',
        'edit_details_picture',
        'edit_details_blog',
        'del_comments_video',
        'del_comments_blog',
        'del_comments_audio',
        'del_comments_pictures',
        'del_comments_group',
        'del_comments_profile',
        'del_blog',
        'del_video',
        'del_audio',
        'del_picture',
        'del_album',
        'edit_comments_video_own',
        'edit_comments_blog_own',
        'edit_comments_audio_own',
        'edit_comments_pictures_own',
        'edit_comments_profile_own',
        'edit_details_member_own',
        'edit_details_video_own',
        'edit_details_audio_own',
        'edit_details_album_own',
        'edit_details_picture_own',
        'edit_details_blog_own',
        'del_comments_video_own',
        'del_comments_blog_own',
        'del_comments_audio_own',
        'del_comments_pictures_own',
        'del_comments_group_own',
        'del_comments_profile_own',
        'del_blog_own',
        'del_video_own',
        'del_audio_own',
        'del_picture_own',
        'del_album_own',
        'edit_comments_group_own'
    ];

    protected $guarded = [];

        
}