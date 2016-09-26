<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PollTemplate
 */
class PollTemplate extends Model
{
    protected $table = 'poll_templates';

    protected $primaryKey = 'tpl_id';

	public $timestamps = false;

    protected $fillable = [
        'tplset_id',
        'title',
        'template'
    ];

    protected $guarded = [];

        
}