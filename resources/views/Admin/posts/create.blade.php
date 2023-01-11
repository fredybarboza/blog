@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')


<h1>Create New Post</h1>

@stop

@section('content')

<div class="card">
  <div class="card-body">
    {!! Form::open(['route' => 'admin.posts.store', 'method' => 'POST', 'autocomplete' => 'off', 'files' => 'true']) !!}
      
    {!! Form::hidden('user_id', auth()->user()->id) !!}

      @include('Admin.posts.form.fields')

      {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
      
    {!! Form::close() !!}
  </div>
</div>

@stop

@section('css')
@include('Admin.posts.form.style')
@stop

@section('js')
  @include('Admin.posts.form.script')
@stop