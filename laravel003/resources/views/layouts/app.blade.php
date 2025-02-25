<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/user') }}">User Dashboard</a>
        <a href="{{ url('/admin') }}">Admin Dashboard</a>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
