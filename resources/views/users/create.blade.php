@extends('layouts.app')

@section('content')
    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h3>Add User</h3>

        </div>

        <div class="card-body">

            <form action="{{ route('users.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="mb-3">

                    <label>Role</label>

                    <select name="role" class="form-select">

                        <option>User</option>
                        <option>Admin</option>

                    </select>

                </div>

                <button class="btn btn-success">
                    Save User
                </button>

                <a href="{{ route('users.index') }}" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>
@endsection
