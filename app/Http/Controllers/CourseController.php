<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// we have to use the model which located in App namespace
use App\Course;
use App\User;
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
    	// here you nedd to get the User from the user table with the  id passed to you
    	$user     = User::find($course->user_id);
    	return view('courses.show',[
    		'course' => $course,
    		'user'=>$user,
    	]);
    }
    public function create()
    {
    	$users = User::all();
    	return view('courses.create',[
    		'users'=>$users,
    	]);

    }
    public function store()
    {
    	// take the request to be able to extract all the data passed by the form
    	$request = request();

    	// fill the DB, Don't forget to set the fillable options in the course Model
    	Course::create([
    		// those on the LHS are the names in the html forms to be able to get them from here
    		'title'=>$request->title,
    		'description'=> $request->description,
    		'user_id'=> $request->user_id,
    	]);
    	return redirect()->route('courses.index');
    }

}
