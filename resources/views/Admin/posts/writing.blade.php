@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<a class="btn btn-secondary mb-2 float-right" href="{{ route('admin.posts.create') }}">New Post</a>
    <h1>Writing</h1>
    
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                   
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="width: 1rem;">
                            <a class="btn btn-primary btn-sm" href="">Edit</a>
                        </td>
                        <td style="width: 1rem;">
                            <form method="POST" action="">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                 
                </tbody>
            </table>
        </div>
    </div>
@stop

