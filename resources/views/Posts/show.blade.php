@extends('Layouts.main')

@section('jumbotron')
    <div id="intro" class="p-2 text-center">

    </div>
@endsection

@section('posts')
    <div class="container bg-light shadow-lg pt-3 mb-2 border-bottom border-dark border-5">
        @foreach ($post->tags as $tag)
            <a class="nav-link badge bg-dark" href="{{ route('tag', $tag) }}">{{ $tag->name }}</a>
        @endforeach
        <h1>{{ $post->name }}</h2>
            <hr>
            <i>Posted by {{ $post->user->name }} on {{ date('d F Y', strtotime($post->created_at)) }}</i>

            <div class="container mt-3 mb-3">
                @isset($post->image)
                    <img id="picture" class="img-fluid" src="{{ Storage::url($post->image->url) }}" alt="">
                @else
                    <img id="picture" src="/img/default.png" alt="">
                    @endif
                </div>
                <p>{!! $post->body !!}</p>

        </div>

        <!-- RELATED POST -->
        @if (count($posts) != 0)
            <div class="container mt-4">
                <section class="text-center">
                    <h4 class="mb-5"><strong>Latest posts about {{ $post->category->name }}</strong></h4>

                    @include('Posts.posts')

                </section>
            </div>
        @endif
    @endsection
