<?php

namespace App\ViewModels;

use Illuminate\Support\Facades\Vite;
use Spatie\ViewModels\ViewModel;

class TopPageViewModel extends ViewModel
{
    public $title;
    public function __construct($title)
    {
        $this->title = $title;
    }

    public function my_languages(): array
    {
        return [
            'php',
            'HTML',
            'CSS',
            'JavaScript',
            'Python'
        ];
    }

    public function frameworks(): array
    {
        return [
            'Laravel',
            'WordPress',
            'EC-CUBE',
        ];
    }

    public function others(): array
    {
        return [
            'git',
            'Linux',
            '電気工事',
            '電気通信工事',
            'PC修理・復旧',
            'ネットワーク構築',
            '動画制作'
        ];
    }

    public function works()
    {
        return [
            [
                'title' => 'Instagram Graph API Token Generator',
                'img_path' => Vite::asset('resources/images/top/instagram.jpg'),
                'abstract' => '<a class="text-blue-500" href="https://instagram.salvador79.dev">https://instagram.salvador79.dev</a>

                インスタグラムの投稿をWebページに埋め込む際は、
                Instagram Graph APIを利用してトークンを発行する必要があります。

                手動でトークンを発行するのが煩わしかったので
                自動取得できるツールを作って運用しております。

                毎日、日本のみならず世界の方々からも利用して頂いております。

                コードは下記Githubリンクからご覧になれます。
                <a href="https://github.com/shoppie70/InstagramGraphApiTokenGenerator">https://github.com/shoppie70/InstagramGraphApiTokenGenerator</a>
                ',
                'detail_img' => Vite::asset('resources/images/top/instagram_site.jpg')
            ],
            [
                'title' => 'ひまわり建宅',
                'img_path' => Vite::asset('resources/images/top/himaken.jpg'),
                'abstract' => '<a class="text-blue-500" href="https://himaken.co.jp">https://himaken.co.jp</a>

                岡山市北区の不動産、有限会社ひまわり建宅さんのHPです。
                打ち合わせ、要件定義、DB設計、フロントエンド＆バックエンドと一気通貫で対応しました。

                WordPressにて、Sage10を用いて開発しています。
                Tailwind CSSを用いて後からの仕様変更にも強いコーディングを心がけています。
                Sage10 + Tailwind CSS + Alpine.js はWordPress制作でのデファクトスタンダードになっております。<br>
                物件の絞り込み検索には、カスタム投稿タイプ＆カスタムフィールドを使用し、WP Queryで対応しています。
                ',
                'detail_img' => Vite::asset('resources/images/top/himaken.jpg')
            ],
            [
                'title' => '前田杯 公式ホームページ',
                'img_path' => Vite::asset('resources/images/top/maedahai.jpg'),
                'abstract' => '<a class="text-blue-500" href="https://instagram.salvador79.dev">https://instagram.salvador79.dev</a>

                インスタグラムの投稿をWebページに埋め込む際は、
                Instagram Graph APIを利用してトークンを発行する必要があります。

                手動でトークンを発行するのが煩わしかったので
                自動取得できるツールを作って運用しております。

                毎日、日本のみならず世界の方々からも利用して頂いております。

                コードは下記Githubリンクからご覧になれます。
                <a href="https://github.com/shoppie70/InstagramGraphApiTokenGenerator">https://github.com/shoppie70/InstagramGraphApiTokenGenerator</a>
                ',
                'detail_img' => Vite::asset('resources/images/top/instagram_site.jpg')
            ],
        ];
    }

    public function blogs(): array
    {
        return [
            [
                'title' => 'Laravelのグローバルスコープとモデル結合ルートについて',
                'site_path' => 'https://webty.jp/staffblog/production/post-4901/',
                'eyecatch_uri' => 'https://webty.jp/staffblog/wp-content/uploads/2019/08/thumbnail_laravel-660x500.png',
            ],
            [
                'title' => 'Instagram Graph APIのトークンの手動取得を少しだけ簡素化する',
                'site_path' => 'https://webty.jp/staffblog/production/post-4855/',
                'eyecatch_uri' => 'https://webty.jp/staffblog/wp-content/uploads/2020/02/ScreenShot-76-890x500.png',
            ],
            [
                'title' => 'Instagram Graph API v13.0 を使ってインスタの投稿を埋め込む方法',
                'site_path' => 'https://webty.jp/staffblog/production/post-4719/',
                'eyecatch_uri' => 'https://webty.jp/staffblog/wp-content/uploads/2020/02/ScreenShot-76-890x500.png',
            ],
        ];
    }
}
