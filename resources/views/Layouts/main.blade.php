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
        <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">


            <div class="container-fluid">
                <a href="/" class="navbar-brand text-light fs-3">Blog</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" style="font-family: Yu Gothic UI Light"
                                aria-current="page" href="/"><b>Inicio</b></a>
                        </li>
                        @yield('categories')

                    </ul>


                    <form action="{{ route('search') }}" method="POST">
                        @csrf
                        <div class="input-group" style="width: 15rem">
                            <input type="search" name="search" class="form-control rounded-start-2"
                                placeholder="Search" aria-label="Search" aria-describedby="search-addon" required />
                            <button type="submit" class="btn btn-outline-primary"><i class="bi bi-search"></i></button>

                        </div>
                    </form>

                </div>
            </div>

        </nav>
        <!-- Navbar -->

        <!-- Jumbotron -->
        @yield('jumbotron')
        <!-- Jumbotron -->
    </header>
    <!--Main Navigation-->


    @yield('posts')

    <!--Footer-->
    <footer class="bg-dark text-lg-start text-light">

        <hr class="m-0" />

        <div class="text-center py-4 align-items-center text-light">
            <p>Follow the blog on social media</p>
            <a href="" class="btn btn-dark m-1" role="button" rel="nofollow" target="_blank">
                <i class="bi bi-instagram"></i>
            </a>
            <a href="" class="btn btn-dark m-1" role="button" rel="nofollow" target="_blank">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="" class="btn btn-dark m-1" role="button" rel="nofollow" target="_blank">
                <i class="bi bi-twitter"></i>
            </a>
            <a href="" class="btn btn-dark m-1" role="button" rel="nofollow" target="_blank">
                <i class="bi bi-github"></i>
            </a>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright
            <a href="/" class="navbar-brand text-light fs-3">Blog</a>

        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->

</body>

</html>
