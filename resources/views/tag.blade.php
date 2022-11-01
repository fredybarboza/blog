@extends('Layouts.main')

@section('jumbotron')
<div id="intro" class="p-5 text-center bg-light">
      <h1 class="mb-3 h2">{{ $tag->name }}</h1>
      
</div>
@endsection

@section('borrar')

<main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section class="text-center">

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
      
      
      
    </div>
  </main>
  <!--Main layout-->
@endsection