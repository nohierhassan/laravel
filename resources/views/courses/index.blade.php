@extends('layouts.app')
@section('content')
<a href="{{route('courses.create')}}" class="btn btn-success mb-5">Add Course</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col"># Pagination Bonus</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($courses as $course)
    <tr>
      <th scope="row">{{$course -> id}}</th>
      <td>{{$course -> title}}</td>
      <td>{{$course -> instructor}}</td>
      <td>{{$course -> created_at}}</td>
      <td><a href="{{route('courses.show',['course' => $course->id])}}" class="btn btn-success btn-sm">View</a></td>
      <td><a href="" class="btn btn-primary btn-sm">Edit</a></td>
      <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
    

    </tr>
    @endforeach

  </tbody>
</table>

@endsection