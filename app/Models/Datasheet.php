<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datasheet extends Model
{
    protected $fillable = [
        'photo',
        'surname',
        'firstname',
        'middlename',
        'name_extension',
        'birthdate',
        'birthplace',
        'sex',
        'civil_status',
        'height',
        'weight',
        'blood_type',
        'gsis_id_no',
        'pagibig_id_no',
        'philhealth_id_no',
        'sss_no',
        'tin_no',
        'agency_employee_no',
        'citizenship',
        'telephone_no',
        'mobile_no',
        'email_address',
    ];

    public function spouse_information()
    {
        return $this->hasOne(Spouse_Information::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }
}
