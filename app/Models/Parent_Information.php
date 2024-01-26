<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parent_Information extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'datasheet_id',
        'type',
        'surname',
        'firstname',
        'middlename',
        'suffix',
    ];

    public function datasheet()
    {
        return $this->belongsTo(Datasheet::class, 'datasheet_id', 'id');
    }
}
