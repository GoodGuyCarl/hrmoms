<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'datasheet_id',
        'text',
        'question_id',
    ];

    public function datasheet()
    {
        return $this->belongsTo(Datasheet::class); // belongsToMany??
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function details()
    {
        return $this->hasMany(Details::class);
    }
    public function choice_answers()
    {
        return $this->hasMany(Choice_Answers::class);
    }
    public function detail_answers()
    {
        return $this->hasMany(Detail_Answers::class);
    }
}
