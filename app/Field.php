<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    public function lessons()   
    {
        return $this->hasMany('App\Lesson');  
    }
}
