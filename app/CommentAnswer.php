<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment_answers';

    protected $fillable= [
        'content','user_id','question_id','answer_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class,'answer_id','id');
    }

}
