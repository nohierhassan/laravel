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
      <td>{{$course -> user->name}}</td>
      <td>{{$course -> created_at}}</td>
      <td><a href="{{route('courses.show',['course' => $course->id])}}" class="btn btn-success btn-sm">View</a></td>
      <td><a href="{{route('courses.edit',['course' => $course->id])}}" class="btn btn-primary btn-sm">Edit</a></td>
      <td><form method="POST"action="{{route('courses.destroy',['course' => $course->id])}}">
             @csrf @method('delete')
             <button type="submit"
              class="btn btn-danger"
               onclick="return confirm('Are you sure that you want to delete this post ?')">
               Delete </button>
            </form>
        </td>
    

    </tr>
    @endforeach

  </tbody>
</table>

@endsection