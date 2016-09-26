<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NuevoMidrollSetting
 */
class NuevoMidrollSetting extends Model
{
    protected $table = 'nuevo__midroll_settings';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'background',
        'opacity',
        'outline',
        'titlecolor',
        'desccolor',
        'linkcolor',
        'hovercolor',
        'aboutcolor',
        'abouttext',
        'abouturl',
        'canclose',
        'defstart',
        'defruntime'
    ];

    protected $guarded = [];

        
}