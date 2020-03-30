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


Route::group(['middleware'=>'auth'], function(){
    Route::get('/', function () {
        return view('welcome');
    });
    
    // the url of all courses
    Route::get('/courses', 'CourseController@index')->name('courses.index');
    
    // the url for rendering the form for the first time 
    Route::get('/courses/create', 'CourseController@create')->name('courses.create');
    
    // the url to store the Course in the DB
    Route::post('/courses', 'CourseController@store')->name('courses.store');
    
    // the url for rendering the update form for the first time
    Route::get('/courses/{course}/edit', 'CourseController@edit')->name('courses.edit');
    
    // the url for actually updating the resource
    Route::put('/courses/{course}', 'CourseController@update')->name('courses.update');
    
    // the url to store the Course in the DB
    Route::delete('/courses/{course}', 'CourseController@destroy')->name('courses.destroy');
    
    // the  url of only one course
    Route::get('/courses/{course}', 'CourseController@show')->name('courses.show');
   
    Route::get('/home', 'HomeController@index')->name('home');

});

Auth::routes();


