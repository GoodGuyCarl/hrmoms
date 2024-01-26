<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Civil_Service_Eligibility extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'datasheet_id',
        'type',
        'rating',
        'date_of_examination_or_conferment',
        'place_of_examination_or_conferment',
        'license_no',
        'date_of_validity',
    ];

    protected $casts = [
        'date_of_examination_or_conferment' => 'date',
        'date_of_validity' => 'date',
    ];
}
