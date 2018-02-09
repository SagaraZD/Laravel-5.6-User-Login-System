@extends('theme.master')

@section('content')
  <div class="container">
    <h2>Update Users</h2>
     @include('includes.message')

    <form  action="{{route('postUpdateUser')}}" method="POST">
      <div class="form-group">
        <label for="firstName">First Name </label>
        <input type="text" class="form-control" name="firstName" value ="{{$users->firstName}}">
      </div>
      <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" class="form-control" name="lastName" value ="{{$users->lastName}}">
      </div>
        <div class="form-group">
        <label for="lastName">Email:</label>
        <input type="email" class="form-control" name="email" value ="{{$users->email}}">
      </div>
        <input type="hidden" name="id" value="{{$users->id}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    
  </div>
@endsection