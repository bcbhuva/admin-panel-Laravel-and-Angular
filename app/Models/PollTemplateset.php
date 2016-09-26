<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PollTemplateset
 */
class PollTemplateset extends Model
{
    protected $table = 'poll_templateset';

    protected $primaryKey = 'tplset_id';

	public $timestamps = false;

    protected $fillable = [
        'tplset_name',
        'created'
    ];

    protected $guarded = [];

        
}