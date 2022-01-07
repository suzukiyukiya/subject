<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/lessons', 'LessonController@index');
Route::get('/users', 'UserController@index');
Route::get('/user_lessons', 'User_lessonController@index');
Route::get('/notes', 'NoteController@index');
Route::get('/fields', 'FieldController@index');
Route::get('/subject_groups', 'Subject_groupController@index');
Route::get('/time_tables', 'Time_tableController@index');

Route::get('/', function () {
    return view('welcome');
});
