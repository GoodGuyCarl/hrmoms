<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'datasheet_id',
        'choice_id',
        'value',
    ];
    public function datasheet()
    {
        return $this->belongsTo(Datasheet::class); // belongsToMany??
    }
    public function choice()
    {
        return $this->belongsTo(Choice::class);
    }
    public function detail_answers()
    {
        return $this->hasMany(Detail_Answers::class);
    }
}
