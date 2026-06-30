<!DOCTYPE html>
<html>

<head>
    <title>User Management</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">

            <a class="navbar-brand fw-bold" href="#">
                User Management
            </a>

        </div>
    </nav>

    <div class="container mt-5">

        @yield('content')

    </div>

</body>

</html>
