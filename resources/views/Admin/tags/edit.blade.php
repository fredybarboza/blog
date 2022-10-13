@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Edit Tag</h1>
@stop

@section('content')

<div class="card">

  <div class="card-body">
    <form method="POST" action="{{ route('admin.tags.update', $tag) }}">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ $tag->name }}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control" id="slug" value="{{ $tag->slug }}" readonly>
      </div>


      <div class="mb-3">
        <label for="form-label">Color</label>
        <select class="form-select form-control" name="color">
          <option value="Blue" @if($tag->color=='Blue') selected @endif>Blue</option>
          <option value="Pink" @if($tag->color=='Pink') selected @endif>Pink</option>
          <option value="Yellow" @if($tag->color=='Yellow') selected @endif>Yellow</option>
          <option value="Green" @if($tag->color=='Green') selected @endif>Green</option>
          <option value="Red" @if($tag->color=='Red') selected @endif>Red</option>
        </select>
      </div>



      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
</div>
@stop

@section('js')
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $("#name").stringToSlug({
      setEvents: 'keyup keydown blur',
      getPut: '#slug',
      space: '-'
    });
  });
</script>
@stop