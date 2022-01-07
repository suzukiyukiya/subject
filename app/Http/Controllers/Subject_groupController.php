<?php

namespace App\Http\Controllers;

use App\Subject_group;
use Illuminate\Http\Request;

class Subject_groupController extends Controller
{
    public function index(Subject_group $subject_group)
    {
        return $subject_group->get();
    }
}
