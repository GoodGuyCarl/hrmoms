<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training_Attended extends Model
{
    public $timestamps = false;

    protected $table = 'trainings__attended';

    protected $fillable = [
        'datasheet_id',
        'title',
        'date_from',
        'date_to',
        'number_of_hours',
        'type_of_ld',
        'conducted_sponsored_by',
    ];

    protected $casts = [
        'date_from' => 'date',
        'date_to' => 'date',
    ];
}
