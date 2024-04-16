<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', '')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bs5.css') }}">
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

    @yield('styles')
</head>

<body>
    @include('layouts.partials.navbar')
    <header>
        <h3 class="text-center rounded m-1">@yield('h3', '')</h3>
    </header>
    <main>
        <div class="m-1">
            @yield('content')
        </div>
    </main>

    @include('layouts.partials.footer')
    <script src="{{ asset('assets/js/bs5.js') }}"></script>
    @yield('scripts')
</body>

</html>
