<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'title','content','user_id','tags'
    ];

    protected $hidden = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function answers(Type $var = null)
    {
        return $this->hasMany(Answer::class,'question_id','id');
    }

    public function commentquestions()
    {
        return $this->hasMany(CommentQuestion::class,'question_id','id');
    }

    public function likes()
    {
        return $this->hasMany(Like::class,'question_id','id');
    }
}
