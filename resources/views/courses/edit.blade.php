@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('courses.update',['course' => $course->id])}}">
    @csrf
    @method('PUT')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="form-group">
      <label >Title</label>
      <input name="title" type="text" class="form-control" aria-describedby="emailHelp" value = "{{$course->title}}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <textarea name="description" class="form-control">{{$course->description}}
      </textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Users</label>
      <!-- the name here is to get these values in courses.store-->
      <select name="user_id" class="form-control">
        @foreach($users as $user)  
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

