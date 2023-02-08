<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>{{ config('app.name') }}</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="{{ config('app.name') }}">
    <meta name="description" content="phpが好物な塚本翔のポートフォリオサイトです。">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('index') }}">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="phpが好物な塚本翔のポートフォリオサイトです。">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="{{ config('app.name') }}">
    <meta property="twitter:description" content="phpが好物な塚本翔のポートフォリオサイトです。">
    <meta property="twitter:image" content="{{ Vite::asset('resources/images/ogp.jpg') }}">

    @include('partials.style')

    @vite(['resources/css/app.scss', 'resources/js/app.js'])

</head>
<body class>
<header class="">
    @include('partials.header')
</header>
<main class="">
    @yield('content')
</main>
<footer>
    @include('partials.footer')
</footer>

@include('partials.script')
</body>
</html>
