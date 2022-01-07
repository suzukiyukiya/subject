<?php

namespace App\Http\Controllers;

use App\User_lesson;
use Illuminate\Http\Request;

class User_lessonController extends Controller
{
    public function index(User_lesson $user_lesson)
    {
        return $user_lesson->get();
    }
}
