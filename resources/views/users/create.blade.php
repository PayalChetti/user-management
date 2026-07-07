<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add New User
        </h2>
    </x-slot>

    <div class="container py-4">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-header bg-primary text-white py-3">
                        <h4 class="mb-0">
                            <i class="fas fa-user-plus me-2"></i>Add User
                        </h4>
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

                        <form action="{{ route('users.store') }}" method="POST">

                            @csrf

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">
                                        Full Name
                                    </label>

                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name') }}" placeholder="Enter full name" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">
                                        Email
                                    </label>

                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email') }}" placeholder="Enter email" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">
                                        Phone Number
                                    </label>

                                    <input type="text" name="phone" class="form-control"
                                        value="{{ old('phone') }}" placeholder="Enter phone number">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">
                                        Password
                                    </label>

                                    <input type="password" name="password" class="form-control"
                                        placeholder="Enter password" required>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-semibold">
                                        Role
                                    </label>

                                    <select name="role" class="form-select">

                                        <option value="">Select Role</option>

                                        <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>
                                            User
                                        </option>

                                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>
                                            Admin
                                        </option>

                                    </select>

                                </div>

                            </div>

                            <hr>

                            <div class="d-flex justify-content-between">

                                <a href="{{ route('users.index') }}" class="btn btn-secondary px-4">
                                    ← Back
                                </a>

                                <button type="submit" class="btn btn-success px-4">
                                    💾 Save User
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>

</x-app-layout>
