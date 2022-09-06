@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<a class="btn btn-secondary mb-2 float-right" href="{{ route('admin.tags.create') }}">New Tag</a>
    <h1>Tags</h1>
    
@stop

@section('content')



    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>SLUG</th>
                        <th>COLOR</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tags as $tag)
                    <tr>
                        <td>{{ $tag->name }}</td>
                        <td>{{ $tag->slug }}</td>
                        <td>{{ $tag->color }}</td>
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

