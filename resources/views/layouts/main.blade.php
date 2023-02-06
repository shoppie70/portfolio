<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="前田杯 応募受付ページ">
    <meta name="description" content="岡山県は下津井の沖磯で行われる釣り大会です。お好きな魚種を2つまで選んで頂き、下部のフォームよりエントリーしてください。">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('index') }}">
    <meta property="og:title" content="前田杯 応募受付ページ">
    <meta property="og:description" content="岡山県は下津井の沖磯で行われる釣り大会です。お好きな魚種を2つまで選んで頂き、下部のフォームよりエントリーしてください。">
    <meta property="og:image" content="{{ asset('assets/front/images/ogp.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="前田杯 応募受付ページ">
    <meta property="twitter:description" content="岡山県は下津井の沖磯で行われる釣り大会です。お好きな魚種を2つまで選んで頂き、下部のフォームよりエントリーしてください。">
    <meta property="twitter:image" content="{{ asset('assets/front/images/ogp.png') }}">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    @include('partials.style')

</head>
<body class>
<header class="">
    @include('partials.header')
</header>
<main class="">
    @yield('content')
</main>
<footer>
    {{--            @include('front::pages.footer')--}}
</footer>

@include('partials.script')
</body>
</html>
