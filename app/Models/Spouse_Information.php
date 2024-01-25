<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spouse_Information extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'datasheet_id',
        'surname',
        'firstname',
        'middlename',
        'suffix',
        'occupation',
        'employer_business_name',
        'business_address',
        'contact_no',
    ];

    public function datasheet()
    {
        return $this->belongsTo(Datasheet::class);
    }
}
