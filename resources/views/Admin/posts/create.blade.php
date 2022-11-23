@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Create New Post</h1>

@stop

@section('content')
<div class="card">
  <div class="card-body">
    <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name">
        @error('name')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control" id="slug" readonly>
        @error('slug')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <input type="text" name="user_id" value="{{ Auth()->user()->id }}">


      <div class="mb-3">
        <label for="form-label">Category</label>
        <select class="form-select form-control" name="category_id">
          @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
        @error('category_id')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="mb-3">
        <label for="form-label">Tags</label>
        <div class="container">
          @foreach($tags as $tag)
          <div class="form-check form-check-inline">
            <input class="form-check-input" name="tags[]" type="checkbox" id="{{ $tag->name }}" value="{{ $tag->id }}">
            <label class="form-check-label" for="{{ $tag->name }}">{{ $tag->name }}</label>
          </div>
          @endforeach
        </div>
        @error('tags')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
<div class="mb-3">
  <label for="" class="form-label">Select an image for the post</label>
      <div class="row mb-3">
        
        <div class="col">
          <div class="image-wrapper">
            <img  id="picture" src="https://pixabay.com/get/gae1d00a524631357a312148564c118a79832693cb6c95135dadc158d3b4a3ed84f7a7a0e12d85f8a8e7db025c6f9ef2ade75999705ffd697290a556b4a84025e0ae9234fb92aa80deea9c884b87e46f7_640.jpg" alt="">
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <input id="file" type="file" name="file" accept="image/*">
          </div>
        </div>
      </div>
      @error('file')
            <small class="text-danger">{{$message}}</small>
        @enderror
      </div>

      <div class="form-floating mb-3">
        <label for="floatingTextarea">Extract</label>
        <textarea class="form-control" name="extract" placeholder="Leave a comment here" id="extract"></textarea>
        @error('extract')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="form-floating mb-3">
        <label for="floatingTextarea">Body</label>
        <textarea class="form-control" name="body" id="body"></textarea>
        @error('body')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="container mb-3">
        <div class="form-check form-check-inline">
          <input class="form-check-input" value="1" type="radio" name="status" id="flexRadioDefault1" checked>
          <label class="form-check-label" for="flexRadioDefault1">
            Guardar Como Borrador
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" value="2" type="radio" name="status" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
            Publicar
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@stop

@section('css')
<style>
  .image-wrapper{
    position: relative;
    padding-bottom: 56.25%;
  }

  .image-wrapper img{
    position: absolute;
    object-fit: cover;
    width: 100%;
    height: 100%;
  }
</style>
@stop

@section('js')
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
  $(document).ready(function() {
    $("#name").stringToSlug({
      setEvents: 'keyup keydown blur',
      getPut: '#slug',
      space: '-'
    });
  });


  ClassicEditor
    .create(document.querySelector('#extract'))
    .catch(error => {
      console.error(error);
    });

  ClassicEditor
    .create(document.querySelector('#body'))
    .catch(error => {
      console.error(error);
    });

    
  document.getElementById("file").addEventListener('change', cambiarImagen);
           function cambiarImagen(event){
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            reader.readAsDataURL(file);
           }
</script>
@stop