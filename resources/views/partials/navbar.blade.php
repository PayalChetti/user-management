<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">User Management</a>

        <div>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-light btn-sm">Dashboard</a>
            <a href="{{ route('users.index') }}" class="btn btn-outline-light btn-sm">Users</a>
        </div>
    </div>
</nav>

<main class="py-4">
    @yield('content')
</main>
