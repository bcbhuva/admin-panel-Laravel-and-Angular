<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MemberProfile
 */
class MemberProfile extends Model
{
    protected $table = 'member_profile';

    protected $primaryKey = 'user_id';

	public $timestamps = false;

    protected $fillable = [
        'account_type',
        'number_of_views',
        'viewtime',
        'user_group',
        'email_address',
        'user_name',
        'password',
        'passwordSalt',
        'first_name',
        'last_name',
        'zip_code',
        'country',
        'rating_number_votes',
        'rating_total_points',
        'updated_rating',
        'last_seen',
        'user_ip',
        'birthday',
        'gender',
        'relationship_status',
        'about_me',
        'personal_website',
        'home_town',
        'home_country',
        'current_country',
        'high_school',
        'college',
        'work_places',
        'interests',
        'fav_movies',
        'fav_music',
        'current_city',
        'confirm_email_code',
        'account_status',
        'random_code',
        'date_created',
        'moderator',
        'flag_counter'
    ];

    protected $guarded = [];

        
}