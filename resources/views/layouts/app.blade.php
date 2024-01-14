<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>
    <!-- Add your stylesheets, scripts, or any other head elements here -->
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="{{ route('users.index') }}">Users</a></li>
            <!-- Add more navigation links if needed -->
        </ul>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <!-- Add your footer content here -->
</footer>

<!-- Add your scripts or any other footer elements here -->
</body>
</html>
