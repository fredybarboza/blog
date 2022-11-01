@extends('Layouts.main')

@section('jumbotron')
<div id="intro" class="p-2 text-center">
      
      
</div>
@endsection

@section('borrar')


<div class="container">
  <a href="{{ route('category', $post->category) }}" class="nav-link text-primary">
  <i>{{ $post->category->name }}</i>
  </a>
 
<h1>{{ $post->name }}</h2>
<h4>{!! $post->extract !!}</h4>
@foreach($post->tags as $tag)
<a class="nav-link badge bg-secondary" href="{{ route('tag', $tag) }}">{{ $tag->name }}</a>
@endforeach


<div class="container mt-3 mb-3">
<img src="https://mdbootstrap.com/img/new/standard/nature/002.jpg" class="img-fluid" alt="...">
</div>
<p>{!! $post->body !!}</p>
</div>



<!-- RELATED POST -->
<div class="container">
<section class="text-center">
        <h4 class="mb-5"><strong>Latest posts</strong></h4>

        <!--POSTS-->
        <div class="row">
          
          <div class="col-lg-4 col-md-12 mb-4">
            
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <a href=""><img src="https://mdbootstrap.com/img/new/standard/nature/002.jpg" class="img-fluid" /></a>
                
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                  
                  <a class="nav-link badge bg-secondary" href="">g5g5</a>
                 
                </div>
                
              </div>
              <div class="card-body">
                <a class="nav-link" href=""><h5 class="card-title">tgt</h5></a>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
                <p class="card-text"><small class="text-muted">by gtgt</small></p>
              </div>
              
            </div>
            
          </div>  

        </div>

      </section>
      </div>

@endsection