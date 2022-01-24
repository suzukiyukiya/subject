<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject_group extends Model
{
    public function lessons()   
    {
        return $this->hasMany('App\Lesson');  
    }
}
