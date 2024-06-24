<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    @include('components.navbar')
    @yield('content')
        <footer>
            <div class="container-fluid bg-dark text-white text-center p-2" style="width: 100%;">
                <p>&copy; Edufun 2024 | Web Programming | Franky William | 2602189915</p>
            </div>
        </footer>
    <script src={{ asset('bootstrap/js/bootstrap.min.js') }}></script>
    <script src={{ asset('bootstrap/js/bootstrap.bundle.js') }}></script>
</body>
</html>
