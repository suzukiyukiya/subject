<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time_table extends Model
{
    public function lessons()   
    {
        return $this->hasMany('App\Lesson');  
    }
}
