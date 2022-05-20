<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question_Answer extends Model
{
    use HasFactory;

    // public function question(){
    //     return $this->belongsTo(Question::class);
    // }

    // public function take_answer(){
    //     return $this->hasMany(Take_Answer::class);
    // }
}
