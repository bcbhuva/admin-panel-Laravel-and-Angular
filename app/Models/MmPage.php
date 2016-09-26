<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MmPage
 */
class MmPage extends Model
{
    protected $table = 'mm_pages';

    protected $primaryKey = 'page_id';

	public $timestamps = false;

    protected $fillable = [
        'title',
        'text',
        'date',
        'status'
    ];

    protected $guarded = [];

        
}