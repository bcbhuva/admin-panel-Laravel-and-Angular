<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NuevoPallete
 */
class NuevoPallete extends Model
{
    protected $table = 'nuevo__pallete';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'skin',
        'screencolor',
        'hovercolor',
        'viral_backhover',
        'viral_texthover',
        'playlisttextcolor',
        'playlisthovercolor',
        'playlisttextshadow',
        'playlisthovershadow',
        'advertcolor'
    ];

    protected $guarded = [];

        
}