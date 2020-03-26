@extends('layouts.app')
@section('content')

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
    </tr>
    @endforeach

  </tbody>
</table>

@endsection