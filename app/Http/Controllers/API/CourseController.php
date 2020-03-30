<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
class CourseController extends Controller
{
    //
    public function index(){
        return Course::all();
    }
}
