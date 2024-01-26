<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Educational_Background extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'datasheet_id',
        'level',
        'school_name',
        'course',
        'date_from',
        'date_to',
        'highest_level_attained',
        'year_graduated',
    ];

    protected $casts = [
        'date_from' => 'date',
        'date_to' => 'date',
    ];
}
