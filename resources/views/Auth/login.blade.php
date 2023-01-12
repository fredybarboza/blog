<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body class="bg-light">
    <div class="d-flex justify-content-center mt-5">

        <div class="d-flex justify-content-center mt-5">

            <div class="container border p-4">

                <div class="container text-center">
                    <a class="navbar-brand" href="/" style="font-family: Yu Gothic UI Light"><b>Digital <span
                                class="text-warning">Nugget</span></b></a>
                </div>
                <hr>
                <div class="container text-center">
                    <h5>Login</h5>
                </div>

                <form method="POST" action="{{ route('login') }}">

                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="">
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
