@extends('Layouts.main')

@section('categories')
    @foreach ($categories as $category)
        <li class="nav-item">
            <a class="nav-link active text-light" style="font-family: Yu Gothic UI Light" aria-current="page"
                href="{{ route('category', $category) }}"><b>{{ $category->name }}</b></a>
        </li>
    @endforeach
@endsection

@section('jumbotron')
    <div id="intro" class="p-5 text-center" style="background: #171717">
        <h3 class="text-light" style="font-family: Yu Gothic UI Light">Blog De Tecnologia, Innovación, y Tendencias</h3>
    </div>
@endsection

@section('posts')
    <!--Main layout-->
    <main class="my-5">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                @include('Posts.posts')

            </section>
            <!--Section: Content-->

            <!-- Pagination -->
            <div class="container mt-4">
                {{ $posts->links() }}
            </div>

        </div>
    </main>
    <!--Main layout-->
@endsection
