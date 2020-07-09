<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentQuestion extends Model
{
    protected $table = 'comment_questions';
    
    protected $fillable = [
        'content','question_id','user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function commentquestion()
    {
        return $this->belongsTo(CommentQuestion::class,'question_id','id');
    }
}
