<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Movie Blog')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="nav-bg nav-text">
            <div class="d-flex flex-start">
                <h1>@yield('title', 'Movie Blog')</h1>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>