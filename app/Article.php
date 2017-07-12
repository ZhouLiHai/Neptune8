<?php

namespace Neptune8;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'category_id'];

    public function user()
    {
        return $this->belongsTo('Neptune8\User');
    }

    public function tags()
    {
        return $this->belongsToMany('Neptune8\Tag');
    }

    public function category()
    {
        return $this->belongsTo('Neptune8\Category');
    }

    public function comments()
    {
        return $this->morphMany('Neptune8\Comment', 'commentable');
    }
}
