<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Register</title>
</head>
<body class="bg-light">
<div class="d-flex justify-content-center mt-5" >

<div class="d-flex justify-content-center">


<div class="container p-4 border">

<div class="container text-center">
  <a href="{{ route('/') }}" class="nav-link">
  <h3>BLOG.com</h3>
  </a>

</div>

<hr>
<div class="container text-center">
<h5>Register</h5>
</div>

<form method="POST" class="" action="{{ route('register') }}">

@csrf
<div class="mb-3">
  <label for="" class="form-label">Name</label>
  <input type="text" name="name" class="form-control" id="">
</div>

<div class="mb-3">
  <label for="" class="form-label">Email address</label>
  <input type="email" name="email" class="form-control" id="" aria-describedby="emailHelp">
  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>

<div class="mb-3">
  <label for="" class="form-label">Password</label>
  <input type="password" name="password" class="form-control" id="">
</div>

<div class="mb-3">
  <label for="" class="form-label">Confirm Password</label>
  <input type="password" name="password_confirmation" class="form-control" id="">
</div>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<button type="submit" class="btn btn-primary right">Submit</button>
</div>

</form>
</div>
</div>
</div>
</body>
</html>