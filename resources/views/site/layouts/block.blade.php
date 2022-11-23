<!doctype html>
<html lang="en">

<head>
    <title>Assobeton</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css'])
    {{-- tailwind cdn css --}}

</head>

<body class="font-sans antialiased">
    <div>
        @yield('content')
    </div>
</body>

</html>
