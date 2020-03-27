<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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
			$validatedData = $request->validate([
        'title' => 'required|min:3|unique:courses',
        'description' => 'required|min:10',
    ]);
    	// fill the DB, Don't forget to set the fillable options in the course Model
    	Course::create([
    		// those on the LHS are the names in the html forms to be able to get them from here
    		'title'=>$request->title,
    		'description'=> $request->description,
    		'user_id'=> $request->user_id,
    	]);
    	return redirect()->route('courses.index');
		}
		public function destroy(Request $request)
		{
			$course = Course::find($request->course);
			$course->delete();
			return redirect()->route('courses.index');
		}

		public function edit(Request $request)
		{
			
			$courseId = $request->course;
			$course = Course::find($courseId);
			$users = User::all();
			// dd($course->user->name);
			return view('courses.edit',[
				'course'=>$course,
				'users'=>$users
				
    	]);
			


		}
		public function update(Request $request)
		{
			$validatedData = $request->validate([
				// 'title' => 'required|min:3|unique:courses',
				'title'=> [
					'required',
					// this to force the unique contraint to stop if the same object is being updated
					Rule::unique('courses')->ignore($request->course),
			],
        'description' => 'required|min:10',
    ]);
			$courseId = $request->course;
			$course = Course::find($courseId);
			$course->title = $request->title;
			$course->description = $request->description;
			$course->user_id = $request->user_id;
			$course->save();
			return redirect()->route('courses.index');
		}

}
