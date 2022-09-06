@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<a class="btn btn-secondary mb-2 float-right" href="{{ route('admin.categories.create') }}">New Category</a>
    <h1>Categories</h1>
    
@stop

@section('content')



    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>SLUG</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td style="width: 1rem;">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.edit', $category) }}">Editar</a>
                        </td>
                        <td style="width: 1rem;">
                            <form method="POST" action="{{ route('admin.categories.destroy', $category) }}">
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

