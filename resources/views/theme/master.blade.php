<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>User Login System - Laravel 5.6</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">User Login System</a>
    </div>
    <ul class="nav navbar-nav">

      @if (Auth::check())
          <li><a href="{{route('logout')}}">Logout</a></li>
      @else
            <li><a href="/">Login</a></li>
      @endif
     
    </ul>
  </div>
</nav>
  <div class="main">
    @yield('content')
  </div>
</body>
</html>