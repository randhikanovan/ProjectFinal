<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    protected $fillable = [
        'question_id'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class,'question_id','id');
    }
    
}
