@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <a class="btn btn-primary mb-2 float-right" href="{{ route('admin.posts.create') }}">
        New Post</a>
    <h1>Posts</h1>

@stop

@section('content')
@if(session('info'))
<div>
    <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
    </div>
</div>
@endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>STATUS</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->name }}</td>
                            <td>
                                @if ($post->status == 1)
                                    <div class="badge bg-danger">Borrador</div>
                                @else
                                    <div class="badge bg-primary">Publicado</div>
                                @endif
                            </td>
                            <td style="width: 1rem;">
                                <a class="btn btn-info btn-sm" href="{{ route('admin.posts.edit', $post) }}"><i
                                        class="fas fa-fw fa-pen"></i></a>
                            </td>
                            <td style="width: 1rem;">
                                <form method="POST" action="{{ route('admin.posts.destroy', $post) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fas fa-fw fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="container mt-4">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@stop
