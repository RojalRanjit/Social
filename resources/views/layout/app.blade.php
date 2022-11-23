<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social App</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('dashboard')}}"><h1>Social</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <span>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}"><h4>Home</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}"><h4>Login</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}"><h4>Register</h4></a>
        </li>
      </ul>
    </div>
    </span>
  </div>
</nav>
    <!-- dynamic content -->
@yield('content')


</body>
</html>