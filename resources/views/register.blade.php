@extends('theme.master')

@section('content')
  <div class="container">
    <h2>Register</h2>
     @include('includes.message')


    <form action="{{route('register')}}" method="post" class="col-md-8">

      <div class="form-group">
        <label for="text">First name:</label>
        <input type="text" name="firstName" class="form-control {{$errors->has('firstName') ? 'has-error' : '' }}" value="{{Request::old('firstName')}}">
      </div>
      <div class="form-group">
        <label for="text">Last Name:</label>
        <input type="text" name="lastName" class="form-control  {{$errors->has('lastName') ? 'has-error' : '' }}" value="{{Request::old('lastName')}}">
      </div>
      <div class="form-group">
        <label for="text">Email (username):</label>
        <input type="text" name="email" class="form-control  {{$errors->has('lastName') ? 'has-error' : '' }}" value="{{Request::old('email')}}">
      </div>
      <div class="form-group">
        <label for="text">Password:</label>
        <input type="password" name="password" class="form-control">
      </div>
      <div class="form-group">
        <label for="text">Repeat Password:</label>
        <input type="password" name="password_confirmation" class="form-control">
      </div>

      <button type="submit" class="btn btn-default">Save</button>
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

  </div>
@endsection