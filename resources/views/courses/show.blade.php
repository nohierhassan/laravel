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
          <p class="card-text">{{$course->instructor}}</p>
        </div>
      </div>
@endsection