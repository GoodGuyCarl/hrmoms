<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choice_Answers extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'datasheet_id',
        'question_id',
        'choice_id',
    ];

    public function datasheet()
    {
        return $this->belongsTo(Datasheet::class); // belongsToMany??
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function choice()
    {
        return $this->belongsTo(Choice::class);
    }
}
