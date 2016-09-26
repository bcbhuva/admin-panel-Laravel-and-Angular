<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NuevoPlayer
 */
class NuevoPlayer extends Model
{
    protected $table = 'nuevo__player';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'regkey',
        'skin',
        'html5skin',
        'autostart',
        'stretching',
        'volume',
        'usetooltips',
        'playbar',
        'playbaroffsetx',
        'playbaroffsety',
        'playbaralpha',
        'fullheight',
        'playlist_show',
        'playlisttype',
        'playlistsize',
        'id3show',
        'id3opacity',
        'guide_show',
        'embed_show',
        'email_show',
        'share_show',
        'bufferlength',
        'videoquality',
        'viral_show',
        'viral_offset',
        'viral_align',
        'viral_backhover',
        'viral_texthover',
        'show_logo',
        'logo',
        'logourl',
        'logoalign',
        'logooffsetx',
        'logooffsety',
        'menuitem',
        'menutext',
        'menulink',
        'slomo_button',
        'replay_button',
        'playlist_button',
        'zoom_button',
        'settings_button',
        'fullscreen_button',
        'volume_button',
        'size_button',
        'resize_button',
        'menu_button',
        'slomointerval',
        'onclick',
        'linktarget',
        'hdicon',
        'hdfirst',
        'hdalign',
        'statscript',
        'rss_url',
        'mailsubject',
        'mailbody',
        'provider',
        'streamer',
        'httpparam',
        'plugins',
        'screencolor',
        'hovercolor',
        'playlisttextcolor',
        'playlisthovercolor',
        'playlisttextshadow',
        'playlisthovershadow',
        'player_width',
        'player_height',
        'html5_width',
        'html5_height',
        'watch_limit_use',
        'limit_start',
        'limit_media',
        'limit_url',
        'guide',
        'plugin_midroll',
        'plugin_overlay',
        'plugin_ticker',
        'plugin_limit',
        'player_type',
        'skip_preroll',
        'backcolor',
        'wmode',
        'html5folder',
        'hdfolder'
    ];

    protected $guarded = [];

        
}