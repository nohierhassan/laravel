<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// we have to use the model which located in App namespace
use App\Course;

class CourseController extends Controller
{
    // we make the logic here
    public function index()
    {
    	$courses = Course::all();
    	return view('courses.index',[
    		'courses'=>$courses,
    	]);
    }

    public function show()
    {
    	$request  = request();
    	$courseId = $request->course;     // course is the name of the passed parameter in the url
    	$course   = Course::find($courseId);
    	return view('courses.show',[
    		'course' => $course,
    	]);
    }

}
