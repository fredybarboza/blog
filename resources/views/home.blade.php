@extends('Layouts.main')

@section('categories')
<li class="nav-item dropdown d-flex">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <ul class="dropdown-menu">
                @foreach($categories as $category)
                <li><a class="dropdown-item" href="{{ route('category', $category) }}">{{ $category->name }}</a></li>
                 @endforeach
              </ul>
            </li>
@endsection

@section('jumbotron')
<div id="intro" class="p-5 text-center bg-light">
      <h1 class="mb-3 h2">Learn Bootstrap 5 with MDB</h1>
      <p class="mb-3">Best & free guide of responsive web design</p>
      <a class="btn btn-primary m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A" role="button" rel="nofollow"
        target="_blank">Start tutorial</a>
      <a class="btn btn-primary m-2" href="https://mdbootstrap.com/docs/standard/" target="_blank"
        role="button">Download MDB UI KIT</a>
</div>
@endsection

@section('posts')
<!--Main layout-->
<main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5"><strong>Latest posts</strong></h4>

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

@section('social')
<div class="py-4 text-center">
      <a role="button" class="btn btn-primary btn-lg m-2"
        href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">
        Learn Bootstrap 5
      </a>
      <a role="button" class="btn btn-primary btn-lg m-2" href="https://mdbootstrap.com/docs/standard/" target="_blank">
        Download MDB UI KIT
      </a>
    </div>
@endsection

