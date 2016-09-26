<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Adsplus
 */
class Adsplus extends Model
{
    protected $table = 'adsplus';

    protected $primaryKey = 'indexer';

	public $timestamps = false;

    protected $fillable = [
        'text1',
        'text2',
        'text3',
        'num1',
        'num2',
        'num3',
        'identifier'
    ];

    protected $guarded = [];

        
}