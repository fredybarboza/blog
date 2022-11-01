@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<a class="btn btn-secondary mb-2 float-right" href="{{ route('admin.posts.create') }}">New Post</a>
    <h1>Posts</h1>
    
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>STATUS</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                 @foreach($posts as $post)   
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->name }}</td>
                        <td>@if($post->status == 1) Borrador @else Publicado @endif</td>
                        <td style="width: 1rem;">
                            <a class="btn btn-primary btn-sm" href="">Editar</a>
                        </td>
                        <td style="width: 1rem;">
                            <form method="POST" action="">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>
        </div>
    </div>
@stop

