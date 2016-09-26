<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Jqcalendar
 */
class Jqcalendar extends Model
{
    protected $table = 'jqcalendar';

    protected $primaryKey = 'Id';

	public $timestamps = false;

    protected $fillable = [
        'Subject',
        'Location',
        'Description',
        'StartTime',
        'EndTime',
        'IsAllDayEvent',
        'Color',
        'RecurringRule'
    ];

    protected $guarded = [];

        
}