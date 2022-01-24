<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function field()
      {
         return $this->belongsTo('App\Field');
      }
    public function subject_group()
      {
         return $this->belongsTo('App\Subject_group');
      }
    public function note()
      {
         return $this->belongsTo('App\Note');
      }
    public function users()
      {
         return $this->belongsToMany('App\User');
      }
      
}
