<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Take_Answer extends Model
{
    use HasFactory;
    public function question_answer(){
        return $this->belongsTo(Question_Answer::class);
    }

    // public function user(){
    //     return $this->hasOne(User::class);
    // }

    // public function question(){
    //     return $this->hasOne(Question::class);
    // }

    // public function question_answer(){
    //     return $this->hasOne(Question_Answer::class);
    // }
}
