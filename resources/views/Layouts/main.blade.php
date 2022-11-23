<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Home</title>
</head>

<body style="background: #f3f3f3;">

  <header>
    <!-- Intro settings -->
    <style>
      #intro {
        /* Margin to fix overlapping fixed navbar */
        margin-top: 58px;
      }

      @media (max-width: 991px) {
        #intro {
          /* Margin to fix overlapping fixed navbar */
          margin-top: 45px;
        }
      }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">


      <div class="container-fluid">
        <a class="navbar-brand" href="/">MyBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            @yield('categories')
            
          </ul>

          @if(Auth()->Check())
          <div class="btn-group">
            <button type="button" class="btn dropdown-toggle border-white" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
              {{Auth()->user()->name}}
            </button>
            <ul class="dropdown-menu dropdown-menu-lg-end">
              <li><a class="dropdown-item" href="{{ route('admin') }}">Dashboard</a></li>
              <hr>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item">Sign out</button>
                </form>
              </li>
            </ul>
          </div>
          @else
          <a class="nav-link me-3" href="{{ route('login') }}">Sign in</a>
          <a class="nav-link" href="{{ route('register') }}">Sign up</a>
          @endif


          <!--xxxxxxx-->

        </div>
      </div>

    </nav>
    <!-- Navbar -->

    <!-- Jumbotron -->
    @yield('jumbotron')
    <!-- Jumbotron -->
  </header>
  <!--Main Navigation-->


  
  @yield('debug')
        
  
  @yield('posts')

  <div class="container ps-3">
  @yield('borrar')
  </div>
  


  <!--Footer-->
  <footer class="bg-light text-lg-start">

    @yield('social')
    <hr class="m-0" />

    <div class="text-center py-4 align-items-center">
      <p>Follow MDB on social media</p>
      <a href="https://www.facebook.com/mdbootstrap" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
      <i class="bi bi-instagram"></i>
      </a>
      <a href="https://www.facebook.com/mdbootstrap" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
        <i class="bi bi-facebook"></i>
      </a>
      <a href="https://twitter.com/MDBootstrap" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
        <i class="bi bi-twitter"></i>
      </a>
      <a href="https://github.com/mdbootstrap/mdb-ui-kit" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
        <i class="bi bi-github"></i>
      </a>
    </div>



    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->



</body>

</html>