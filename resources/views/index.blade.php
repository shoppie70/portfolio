@extends('layouts.main')

@section('content')
    <article class="text-white">
        <section class="hero" style="background-image: url('{{ Vite::asset('resources/images/bg-sea.jpg') }}')">
            <div class="relative z-10">
                <p class="mb-6 text-3xl tracking-wider job-title">
                    web developer
                </p>
                <h1 class="title flex overflow-hidden text-5xl font-bold tracking-widest raleway md:text-8xl">
                    <span>S</span>
                    <span>h</span>
                    <span>o</span>
                    <span>&nbsp;</span>
                    <span>T</span>
                    <span>s</span>
                    <span>u</span>
                    <span>k</span>
                    <span>a</span>
                    <span>m</span>
                    <span>o</span>
                    <span>t</span>
                    <span>o</span>
                </h1>
            </div>
        </section>
        <section id="about" class="px-4 py-16 bg-dark-grayish-blue md:px-0 md:py-32">
            <div class="mx-auto max-w-screen-lg">
                <div class="mb-16">
                    @include('components.heading-main',['heading' => 'ABOUT'])
                </div>
                <div class="flex flex-wrap md:flex-nowrap">
                    <div class="w-full md:w-4/12">
                        <figure>
                            <img class="mx-auto w-full" src="{{ Vite::asset('resources/images/my_profile.jpg') }}" alt="">
                        </figure>
                    </div>
                    <div class="w-full pt-8 md:w-8/12 md:px-16 md:pt-0 md:pb-16">
                        <div class="mb-8 flex items-center">
                            <span class="mr-8 inline-block profile-name-line"></span>
                            <p>
                                Sho Tsukamoto
                            </p>
                        </div>
                        <div class="mb-8 flex items-center">
                            <h2 class="mr-12 text-3xl">
                                塚本翔
                            </h2>
                            <svg width="32px" height="32px" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"
                                 preserveAspectRatio="xMinYMin meet" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g fill="#ffffff">
                                        <path
                                            d="M127.505 0C57.095 0 0 57.085 0 127.505c0 56.336 36.534 104.13 87.196 120.99 6.372 1.18 8.712-2.766 8.712-6.134 0-3.04-.119-13.085-.173-23.739-35.473 7.713-42.958-15.044-42.958-15.044-5.8-14.738-14.157-18.656-14.157-18.656-11.568-7.914.872-7.752.872-7.752 12.804.9 19.546 13.14 19.546 13.14 11.372 19.493 29.828 13.857 37.104 10.6 1.144-8.242 4.449-13.866 8.095-17.05-28.32-3.225-58.092-14.158-58.092-63.014 0-13.92 4.981-25.295 13.138-34.224-1.324-3.212-5.688-16.18 1.235-33.743 0 0 10.707-3.427 35.073 13.07 10.17-2.826 21.078-4.242 31.914-4.29 10.836.048 21.752 1.464 31.942 4.29 24.337-16.497 35.029-13.07 35.029-13.07 6.94 17.563 2.574 30.531 1.25 33.743 8.175 8.929 13.122 20.303 13.122 34.224 0 48.972-29.828 59.756-58.22 62.912 4.573 3.957 8.648 11.717 8.648 23.612 0 17.06-.148 30.791-.148 34.991 0 3.393 2.295 7.369 8.759 6.117 50.634-16.879 87.122-64.656 87.122-120.973C255.009 57.085 197.922 0 127.505 0"></path>
                                        <path
                                            d="M47.755 181.634c-.28.633-1.278.823-2.185.389-.925-.416-1.445-1.28-1.145-1.916.275-.652 1.273-.834 2.196-.396.927.415 1.455 1.287 1.134 1.923M54.027 187.23c-.608.564-1.797.302-2.604-.589-.834-.889-.99-2.077-.373-2.65.627-.563 1.78-.3 2.616.59.834.899.996 2.08.36 2.65M58.33 194.39c-.782.543-2.06.034-2.849-1.1-.781-1.133-.781-2.493.017-3.038.792-.545 2.05-.055 2.85 1.07.78 1.153.78 2.513-.019 3.069M65.606 202.683c-.699.77-2.187.564-3.277-.488-1.114-1.028-1.425-2.487-.724-3.258.707-.772 2.204-.555 3.302.488 1.107 1.026 1.445 2.496.7 3.258M75.01 205.483c-.307.998-1.741 1.452-3.185 1.028-1.442-.437-2.386-1.607-2.095-2.616.3-1.005 1.74-1.478 3.195-1.024 1.44.435 2.386 1.596 2.086 2.612M85.714 206.67c.036 1.052-1.189 1.924-2.705 1.943-1.525.033-2.758-.818-2.774-1.852 0-1.062 1.197-1.926 2.721-1.951 1.516-.03 2.758.815 2.758 1.86M96.228 206.267c.182 1.026-.872 2.08-2.377 2.36-1.48.27-2.85-.363-3.039-1.38-.184-1.052.89-2.105 2.367-2.378 1.508-.262 2.857.355 3.049 1.398"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <p class="mb-8">
                            1997年7月生まれ、岡山県出身。
                        </p>
                        <p class="leading-7">
                            幼少期からコンピュータや工学に興味があり、パソコンを触っているのが大好きです。<br>
                            なかでも、プログラミングした内容がすぐ視覚化されるWeb系が好物でphpを愛しています。
                            Laravelを用いたシステム開発を得意としています。<br><br>

                            システム開発において、打ち合わせ、要件定義、DB設計、フロントエンド＆バックエンドと一気通貫で経験しています。<br>
                            また、IT系のみならず、電気工事や電気通信工事等にも対応可能です。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="skills" class="px-4 py-16 md:px-0 md:py-32" style="background-color: #222527">
            <div class="mx-auto w-full max-w-screen-lg">
                <div class="mb-16">
                    @include('components.heading-main',['heading' => 'SKILLS'])
                </div>
                <div class="mb-16">
                    <h2 class="pl-4 text-4xl font-normal tracking-wider text-white md:text-6xl">
                        php
                    </h2>
                    <div class="-mt-4 p-4 pt-8 bg-dark-grayish-blue md:p-8">
                        <p class="mb-4">
                            5.2~8.1まで5年ほど経験。<br>
                            composerを利用した独自フレームワークの実装経験もありますが、基本的にはLaravelを用いて開発を行っています。<br>
                            エディタはPhpStorm, 開発はDockerを用いて行っています。
                        </p>
                        <section class="mb-8">
                            <h3 class="mb-4 text-xl font-bold">
                                Laravel
                            </h3>
                            <ul>
                                <li class="mb-2">
                                    - 主にLaravel6～から利用しています。
                                </li>
                                <li>
                                    - laravel-modulesを用い、管理画面とフロント画面を分け、モジュラモノリスを意識した開発を行っています。
                                </li>
                            </ul>
                        </section>
                        <section class="mb-8">
                            <h3 class="mb-4 text-xl font-bold">
                                WordPress
                            </h3>
                            <ul>
                                <li class="mb-2">
                                    - 主にSage10を用い、MVCライクなテーマ開発を行っています。
                                </li>
                                <li class="mb-2">
                                    - ViewはTailwind CSSを用いてスピーディなコーディングを進めています。
                                </li>
                                <li class="mb-2">
                                    - phpを駆使して、システムの入ったサイトも構築可能です。
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h3 class="mb-4 text-xl font-bold">
                                EC-CUBE
                            </h3>
                            <ul>
                                <li>
                                    - 基本的にEC-CUBE4系を使用しています。
                                </li>
                                <li>
                                    - 決済システムとしてStripeを選定し、純正テーマを改造しながらテーマを構築しています。
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
                <ul class="flex flex-wrap md:flex-nowrap">
                    <li class="mb-4 w-full md:mb-0 md:w-1/3">
                        <h3 class="mb-4 text-xl">
                            言語
                        </h3>
                        <ol class="pl-4">
                            @foreach($my_languages as $my_language)
                                <li class="mb-2">
                                    - {{ $my_language }}
                                </li>
                            @endforeach
                        </ol>
                    </li>
                    <li class="mb-4 w-full md:mb-0 md:w-1/3">
                        <h3 class="mb-4 text-xl">
                            フレームワーク・CMS
                        </h3>
                        <ol class="pl-4">
                            @foreach($frameworks as $framework)
                                <li class="mb-2">
                                    - {{ $framework }}
                                </li>
                            @endforeach
                        </ol>
                    </li>
                    <li class="mb-4 w-full md:mb-0 md:w-1/3">
                        <h3 class="mb-4 text-xl">
                            その他
                        </h3>
                        <ol class="pl-4">
                            @foreach($others as $other_item)
                                <li class="mb-2">
                                    - {{ $other_item }}
                                </li>
                            @endforeach
                        </ol>
                    </li>
                </ul>
            </div>
        </section>
        <section id="works" class="px-4 py-16 bg-dark-blue md:px-0 md:py-32">
            <div class="mx-auto w-full max-w-screen-lg">
                <div class="mb-16">
                    @include('components.heading-main',['heading' => 'WORKS'])
                </div>
                <ul class="flex flex-wrap md:flex-nowrap">
                    @foreach($works as $work)
                        <li class="mb-8 w-full md:mb-0 md:w-1/3">
                            <article class="p-2 open" x-data="{ open: false }" @click="open = true">
                                <figure class="cursor-pointer">
                                    <img class="mb-4 aspect-video" src="{{ $work['img_path'] }}"
                                         alt="{{ $work['title'] }}">
                                    <figcaption>
                                        {{ $work['title'] }}
                                    </figcaption>
                                </figure>
                                <div class="fixed top-6 left-4 flex h-screen w-11/12 items-center justify-center md:top-0 md:left-0 md:w-screen"
                                     style="background-color: rgba(0,0,0,.5);" x-show="open">
                                    <div
                                        class="flex h-auto w-full max-w-screen-xl flex-wrap overflow-y-scroll rounded bg-white p-4 text-black shadow-xl md:flex-nowrap md:p-12"
                                        @click.away="open = false">
                                        <div class="mb-4 w-full md:mb-0 md:w-5/12">
                                            <h1 class="mb-4 text-2xl font-bold">
                                                {{ $work['title'] }}
                                            </h1>
                                            <p class="text-sm md:text-base">
                                                {!! nl2br($work['abstract'] ?? '') !!}
                                            </p>
                                        </div>
                                        <div class="w-full md:w-7/12">
                                            <img class="aspect-video w-full" src="{{ $work['detail_img'] ?? '' }}"
                                                 alt="work detail">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
        <section id="blog" class="px-4 py-16 md:px-0 md:py-32" style="background-color: #222527">
            <div class="mx-auto w-full max-w-screen-lg">
                <div class="mb-16">
                    @include('components.heading-main',['heading' => 'BLOG'])
                </div>
                <p class="mb-4 pl-4">
                    前職スタッフブログにて経験を記載しています。
                </p>
                <ul class="mb-8 flex flex-wrap md:flex-nowrap">
                    @foreach($blogs as $blog)
                        <li class="mb-8 w-full md:mb-0 md:w-1/3">
                            <article class="p-2">
                                <a href="{{ $blog['site_path'] }}" target="_blank" rel="noopener">
                                    <figure>
                                        <img class="mb-2 aspect-video object-cover" src="{{ $blog['eyecatch_uri'] }}"
                                             alt="{{ $blog['title'] }}">
                                        <figcaption>
                                            {{ $blog['title'] }}
                                        </figcaption>
                                    </figure>
                                </a>
                            </article>
                        </li>
                    @endforeach
                </ul>
                <div class="text-right">
                    <div class="flex items-center justify-end">
                        <a class="text-xl" href="https://webty.jp/staffblog/author/tsukamoto/" target="_blank" rel="noopener">
                            VIEW MORE
                        </a>
                        <span class="ml-4 inline-block profile-name-line"></span>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
