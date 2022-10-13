@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Create New Tag</h1>
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
        <label for="form-label">Color</label>
        <select class="form-select form-control" name="color">
          <option value="red">Red</option>
          <option value="blue" selected>Blue</option>
          <option value="green">Green</option>
          <option value="pink">Pink</option>
          <option value="yellow">Yellow</option>
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