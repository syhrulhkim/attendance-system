<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendance';

    protected $fillable = [
        'user_id',
        'attendance_id',
        'attendance_name', 
        'date', 
        'shift', 
        'hours', 
        'start_time', 
        'end_time', 
        'break_time', 
    ];

}
