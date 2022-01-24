<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function lessons()   
    {
        return $this->hasOne('App\Lesson');  
    }
}
