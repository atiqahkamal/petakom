<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityRecord extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'activities';
    protected $primaryKey = 'ActivityID';

    protected $fillable = [
        'activity_title',
        'activity_dateStart',
        'activity_dateEnd',
        'activity_timeStart',
        'activity_timeEnd',
        'activity_location',
        'activity_participation',
        'activity_description',
        'created_at',
        'updated_at',
        'deleted_at'
    
    ];
}
