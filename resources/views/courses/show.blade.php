@extends('layouts.app')

@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Post Info</h5>
          <p class="card-text">{{$course->title}}</p>
          <p class="card-text">{{$course->description}}</p>
        </div>
      </div>
       <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Instructor Info</h5>
          <p class="card-text">Name: {{$user->name}}</p>
           <p class="card-text">Email: {{$user->email}}</p>
            <p class="card-text">Created At: {{$user->created_at}}</p>
        </div>
      </div>
@endsection