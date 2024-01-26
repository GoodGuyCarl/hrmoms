<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Children_Information extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'datasheet_id',
        'firstname',
        'middlename',
        'surname',
        'suffix',
        'birthdate',
    ];

    protected $casts = [
        'birthdate' => 'date',
    ];

    public function datasheet()
    {
        return $this->belongsTo(Datasheet::class);
    }
}
