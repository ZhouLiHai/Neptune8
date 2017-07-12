<?php

namespace Neptune8;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function tags()
    {
        return $this->belongsToMany('Neptune8\Article');
    }
}
