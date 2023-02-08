<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
<div class="flex min-h-screen flex-col items-center pt-6 text-white bg-dark-grayish-blue sm:justify-center sm:pt-0">
    <div>
        Welcome to Sho Tsukamoto's Portfolio site!
    </div>

    <div class="mt-6 w-full overflow-hidden bg-gray-900 px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
@include('partials.script')
</body>
</html>
