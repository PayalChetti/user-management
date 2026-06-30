<h1>Edit User</h1>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $user->name }}"><br><br>
    <input type="email" name="email" value="{{ $user->email }}"><br><br>
    <input type="text" name="phone" value="{{ $user->phone }}"><br><br>

    <select name="role">
        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
    </select><br><br>

    <button type="submit">Update</button>
</form>
