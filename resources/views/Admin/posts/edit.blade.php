@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($post, [
                'route' => ['admin.posts.update', $post],
                'method' => 'PUT',
                'autocomplete' => 'off',
                'files' => 'true',
            ]) !!}

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
