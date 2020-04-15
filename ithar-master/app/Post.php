<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function post()
    {
        return $this->hasMany('App\image');
    }

    public function don()
    {
        return $this->hasMany('App\don');
    }       
}
