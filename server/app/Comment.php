<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['book_id', 'user_id', 'content',];

    public function book()
    {
        return $this->belongsTo('App/Book');
    }
}
