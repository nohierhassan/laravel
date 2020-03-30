<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Http\Resources\CourseResource;
class CourseController extends Controller
{
    //
    public function index(){

        return CourseResource::collection( Course::all()) ;
    }
    public function show()   // OR public function show($post) ...... as the framework passes the passed variable in the url
    {    
        return new CourseResource( 
            Course::find(
                request()-> course)
            );

    }
}
