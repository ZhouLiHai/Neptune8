<?php

namespace Neptune8;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function articles() {
        return $this->hasMany('Neptune8/Article');
    }
}
