<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PollConfig
 */
class PollConfig extends Model
{
    protected $table = 'poll_config';

    protected $primaryKey = 'config_id';

	public $timestamps = false;

    protected $fillable = [
        'base_gif',
        'lang',
        'title',
        'vote_button',
        'result_text',
        'total_text',
        'voted',
        'send_com',
        'img_height',
        'img_length',
        'table_width',
        'bgcolor_tab',
        'bgcolor_fr',
        'font_face',
        'font_color',
        'type',
        'check_ip',
        'lock_timeout',
        'time_offset',
        'entry_pp',
        'poll_version',
        'base_url',
        'result_order',
        'def_options',
        'polls_pp',
        'captcha'
    ];

    protected $guarded = [];

        
}