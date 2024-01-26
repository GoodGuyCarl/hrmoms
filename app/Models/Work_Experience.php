<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work_Experience extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'datasheet_id',
        'position_title',
        'date_to',
        'date_from',
        'department_agency_company_office',
        'monthly_salary',
        'salary_job_pay_grade',
        'status_of_appointment',
        'government_service',
    ];

    protected $casts = [
        'date_to' => 'date',
        'date_from' => 'date',
    ];
}
