@extends('Layouts.main')

@section('jumbotron')
    <div id="intro" class="p-3 text-center" style="background: #f3f3f3;">

    </div>
@endsection

@section('posts')
    <main class="my-5">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <!--POSTS-->
                @if (count($posts) !== 0)
                    @include('Posts.posts')
                @else
                    <div class="alert alert-dark" role="alert">
                        No se han encontrado resultados para tu búsqueda.
                    </div>
                @endif

            </section>
            <!--Section: Content-->

            <div class="container mt-4">
                {{ $posts->links() }}
            </div>

        </div>
    </main>
    <!--Main layout-->
@endsection
