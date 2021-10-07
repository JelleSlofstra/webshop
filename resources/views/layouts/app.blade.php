<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/92ae350554.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="page-container">
        <div id="content-wrap">
            @include('partials.navbar')
            <main class="py-4">
                @yield('content')
            </main>
            @include('partials.footer')
        </div>
    </div>
    @stack('scripts')
</body>
</html>
