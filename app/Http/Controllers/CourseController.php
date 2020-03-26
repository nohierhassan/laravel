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

}
