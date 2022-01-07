<?php

namespace App\Http\Controllers;

use App\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index(Field $field)
    {
       return $field->get();
    }
}
