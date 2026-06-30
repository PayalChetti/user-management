@extends('layouts.app')

@section('content')
    <div class="card shadow">

        <div class="card-header d-flex justify-content-between">

            <h3>Users</h3>

            <a href="{{ route('users.create') }}" class="btn btn-primary">
                Add User
            </a>

        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead class="table-dark">

                    <tr>

                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Action</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach ($users as $user)
                        <tr>

                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>

                                @if ($user->role == 'admin')
                                    <span class="badge bg-danger">
                                        Admin
                                    </span>
                                @else
                                    <span class="badge bg-success">
                                        User
                                    </span>
                                @endif

                            </td>

                            <td>

                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>

                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

    </div>
@endsection
