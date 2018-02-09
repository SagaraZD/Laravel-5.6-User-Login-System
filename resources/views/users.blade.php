@extends('theme.master')

@section('content')
  <div class="container">
    <h2>Users</h2>
     @include('includes.message')

    
       
      


      <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
      <tr>
        <td>{{$user->firstName}}</td>
        <td>{{$user->lastName}}</td>
        <td> {{$user->email}}</td>
        <td> <a href="{{route('updateUser',['id'=>$user->id ]) }}">Edit </a></td>
      </tr>
      @endforeach
    </tbody>

  </div>
@endsection