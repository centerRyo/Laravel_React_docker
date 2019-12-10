<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['user_id', 'title', 'author', 'image_url', 'publication_year',];

    public function user()
    {
        return $this->belongsTo('App/User');
    }
}
