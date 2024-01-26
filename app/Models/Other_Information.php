<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Other_Information extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'datasheet_id',
        'special_skills_hobbies',
        'non_academic_distinctions_recognitions',
        'membership_in_association_organization',
        'question_id',
    ];
}
