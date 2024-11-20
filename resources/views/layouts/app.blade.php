<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Balances of Users')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
{{--    @vite(['resources/css/app.scss', 'resources/js/app.js'])--}}
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Balance App</a>

        @auth
            <div>
                <a class="navbar-brand" href="{{ route('history') }}">History</a>
                <span class="me-3">Welcome, {{ auth()->user()->name }}</span>
                <a href="{{ route('logout') }}" class="btn btn-danger btn-sm">Logout</a>
            </div>
        @endauth
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
