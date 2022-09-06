@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Category</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
        <form method="POST" action="{{ route('admin.categories.update', $category) }}">
        @csrf
        @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control" id="slug" value="{{ $category->slug }}" readonly>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
        </div>
    </div>
@stop

@section('js')
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
<script>
    $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});
</script>
@stop


