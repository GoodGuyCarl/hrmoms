<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Datasheet;

class Question extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'datasheet_id',
        'no',
        'is_laundrylist',
        'laundry_list_item',
        'description',
        'type',
    ];

    public function datasheet(){
        return $this->belongsTo(Datasheet::class); // belongsToMany??
    }
    public function choices(){
        return $this->hasMany(Choice::class, 'question_id');
    }
    public function detail_answers(){
        return $this->hasMany(Detail_Answers::class);
    }
    public function choice_answers(){
        return $this->hasMany(Choice_Answers::class);
    }
}
