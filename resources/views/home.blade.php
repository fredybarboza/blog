@extends('Layouts.main')

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

        <!--POSTS-->
        <div class="row">
          @foreach($posts as $post)
          <div class="col-lg-4 col-md-12 mb-4">
            
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <a href=""><img src="https://mdbootstrap.com/img/new/standard/nature/002.jpg" class="img-fluid" /></a>
                
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                  @foreach($post->tags as $tag)
                  <a class="nav-link badge bg-secondary" href="{{ route('tag', $tag) }}">{{ $tag->name }}</a>
                  @endforeach
                </div>
                
              </div>
              <div class="card-body">
                <a class="nav-link" href="{{ route('post', $post) }}"><h5 class="card-title">{{ $post->name }}</h5></a>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
                <p class="card-text"><small class="text-muted">by {{ $post->user->name }}</small></p>
              </div>
              
            </div>
            
          </div>
          

          @endforeach
          

        </div>

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

