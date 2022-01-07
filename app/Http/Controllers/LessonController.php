<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index(Lesson $lesson)
    {
       return $lesson->get();
    }
}
