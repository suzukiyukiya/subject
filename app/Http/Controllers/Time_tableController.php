<?php

namespace App\Http\Controllers;

use App\Time_table;
use Illuminate\Http\Request;

class Time_tableController extends Controller
{
    public function index(Time_table $time_table)
    {
        return $time_table->get();
    }
}
