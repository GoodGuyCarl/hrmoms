<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voluntary_Involvement extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'datasheet_id',
        'name_of_organization',
        'address_of_organization',
        'date_to',
        'date_from',
        'number_of_hours',
        'position_nature_of_work',
    ];

    protected $casts = [
        'date_to' => 'date',
        'date_from' => 'date',
    ];
}
