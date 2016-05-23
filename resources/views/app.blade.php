<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spartan Weight Lifting Log</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
</head>

<body>

  <!-- Move this into a partial -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/logs') }}">Spartan Log</a>
      </div>

      <div class="collapse navbar-collapse" id="collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="{{ url('/groups') }}">Groups</a></li>
          <li><a href="{{ url('/workouts') }}">Workouts</a></li>
          <li><a href="{{ url('/exercises') }}">Exercises</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
          <li><a href="{{ url('auth/logout') }}">Logout</a></li>
        @else
          <li><a href="{{ url('auth/login') }}">Login</a></li>
          <li><a href="{{ url('auth/register') }}">Register</a></li>
        @endif
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
</body>
</html>