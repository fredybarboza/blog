@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit', $user) }}">Edit Role</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="container mt-4">
        {{ $users->links() }}
    </div>
</div>
@stop
