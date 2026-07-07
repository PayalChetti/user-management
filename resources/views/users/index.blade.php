<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User Management
        </h2>
    </x-slot>

    <div class="container py-4">

        <form method="GET" class="mb-3">
            <input type="text" name="search" value="{{ $search }}" class="form-control"
                placeholder="Search users...">
        </form>

        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">
            Add User
        </a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ ucfirst($user->role) }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>

                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

        {{ $users->links() }}

    </div>

</x-app-layout>
