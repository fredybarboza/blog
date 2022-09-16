@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-secondary mb-2 float-right" href="">Publish</a>
    <h1>Create New Post</h1>
    
@stop

@section('content')
<div class="card">
    <div class="card-body">
    <form method="POST" action="{{ route('admin.tags.store') }}">
        @csrf
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control" id="slug" readonly>
  </div>

 
  <div class="mb-3"> 
    <label for="form-label">Category</label>
    <select class="form-select form-control" name="color">
        @foreach($categories as $category)
  <option value="{{ $category->id }}">{{ $category->name }}</option>
  @endforeach 
</select>
  </div>

  <div class="mb-3"> 
    <label for="form-label">Tags</label>
    <div class="container">
        @foreach($tags as $tag)
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="tag" type="checkbox" id="{{ $tag->name }}" value="{{ $tag->id }}">
            <label class="form-check-label" for="{{ $tag->name }}">{{ $tag->name }}</label>
        </div>
        @endforeach
    </div>
  </div>

  <div class="form-floating mb-3">
  <label for="floatingTextarea">Extract</label>
  <textarea class="form-control" placeholder="Leave a comment here" id="extract"></textarea>
</div>

<div class="form-floating mb-3">
  <label for="floatingTextarea">Body</label>
  <textarea class="form-control" id="body"></textarea>
</div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
    </div>
</div>
   
@stop

@section('js')
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
    $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});


ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );

ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@stop