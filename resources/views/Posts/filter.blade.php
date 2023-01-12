@extends('Layouts.main')

@section('jumbotron')
    <div id="intro" class="p-5 text-center" style="background: #171717">
        <h1 class="mb-3 h2 text-light" style="font-family: Yu Gothic UI Light">{{ $name }}</h1>
    </div>
@endsection

@section('posts')
    <main class="my-5">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <!--POSTS-->
                @include('Posts.posts')

            </section>
            <!--Section: Content-->

        </div>
    </main>
    <!--Main layout-->
@endsection
