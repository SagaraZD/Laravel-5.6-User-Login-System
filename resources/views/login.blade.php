@extends('theme.master')
@section('content')


    <div class="container">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <h2>Login</h2>
        @include('includes.message')
      <form action="{{route('login')}}" method="post">
        <div class="form-group">
          <label for="text">Username:</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="text">Password:</label>
          <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-default">Login</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </form>
    </div>
    <div class="col-md-4">
    </div>

    
  </div>

 
@endsection
