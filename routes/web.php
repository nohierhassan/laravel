<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// the url of all courses
Route::get('/courses', 'CourseController@index')->name('courses.index');

// the  url of only one course
Route::get('/courses/{course}', 'CourseController@show')->name('courses.show');