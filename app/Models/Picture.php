<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Picture
 */
class Picture extends Model
{
    protected $table = 'pictures';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'file_name',
        'user_id',
        'todays_date',
        'approved'
    ];

    protected $guarded = [];

        
}