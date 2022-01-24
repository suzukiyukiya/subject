<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function index(Lesson $lesson)
    { 
        $lessons = $lesson::orderBy('id', 'asc')->get();
        return view('subject/time_table', compact('lessons'));
    }
    
    public function store(Request $request)
    {
        $input_lessons = $request->lessons_array;
        $user = Auth::user();

        $user->lessons()->detach();
        $user->lessons()->attach($input_lessons); 
        return redirect('/');
    }
    
}    
