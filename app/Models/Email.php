<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Email
 */
class Email extends Model
{
    protected $table = 'emails';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'description',
        'email_body',
        'email_subject',
        'email_id'
    ];

    protected $guarded = [];

        
}