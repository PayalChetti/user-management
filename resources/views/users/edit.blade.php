<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit User
        </h2>
    </x-slot>

    <div class="container py-4">

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">✏️ Edit User Details</h4>
                    </div>

                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('users.update', $user->id) }}" method="POST">

                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $user->name) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Email</label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ old('email', $user->email) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Phone</label>
                                <input type="text" name="phone" class="form-control"
                                    value="{{ old('phone', $user->phone) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Role</label>

                                <select name="role" class="form-select">
                                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>
                                        User
                                    </option>

                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>
                                        Admin
                                    </option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-between">

                                <a href="{{ route('users.index') }}" class="btn btn-secondary">
                                    ← Back
                                </a>

                                <button type="submit" class="btn btn-success">
                                    💾 Update User
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>

</x-app-layout>
