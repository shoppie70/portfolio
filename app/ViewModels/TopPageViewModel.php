<?php

namespace App\ViewModels;

use Illuminate\Support\Facades\Vite;
use Spatie\ViewModels\ViewModel;

class TopPageViewModel extends ViewModel
{
    public string $title;
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

    public function works(): array
    {
        return [
            [
                'title' => 'Instagram Graph API Token Generator',
                'img_path' => asset('works/instagram.jpg'),
                'abstract' => '<a class="text-blue-500" href="https://instagram.salvador79.dev" target="_blank" rel="noopener">https://instagram.salvador79.dev</a>

                インスタグラムの投稿をWebページに埋め込む際は、
                Instagram Graph APIを利用してトークンを発行する必要があります。

                手動でトークンを発行するのが煩わしかったので
                自動取得できるツールを作って運用しております。

                毎日、日本のみならず世界の方々からも利用して頂いております。

                コードは下記Githubリンクからご覧になれます。
                <a href="https://github.com/shoppie70/InstagramGraphApiTokenGenerator">https://github.com/shoppie70/InstagramGraphApiTokenGenerator</a>
                ',
                'detail_img' => asset('works/instagram_site.jpg')
            ],
            [
                'title' => 'ひまわり建宅',
                'img_path' => asset('works/himaken.jpg'),
                'abstract' => '<a class="text-blue-500" href="https://himaken.co.jp" target="_blank" rel="noopener">https://himaken.co.jp</a>

                岡山市北区の不動産、有限会社ひまわり建宅さんのHPです。
                打ち合わせ、要件定義、DB設計、フロントエンド＆バックエンドと一気通貫で対応しました。

                WordPressにて、Sage10を用いて開発しています。
                Tailwind CSSを用いて後からの仕様変更にも強いコーディングを心がけています。
                Sage10 + Tailwind CSS + Alpine.js はWordPress制作でのデファクトスタンダードになっております。<br>
                物件の絞り込み検索には、カスタム投稿タイプ＆カスタムフィールドを使用し、WP Queryで対応しています。
                ',
                'detail_img' => asset('works/himaken.jpg')
            ],
            [
                'title' => '前田杯 公式ホームページ',
                'img_path' => asset('works/maedahai.jpg'),
                'abstract' => '<a class="text-blue-500" href="https://fishing.salvador79.dev" target="_blank" rel="noopener">https://fishing.salvador79.dev</a>

                友人と一緒に釣り大会を運営しています。
                こちらは去年の秋に開催した、大会の応募システムになります。

                Laravelを用いて開発しております。
                管理画面から応募者の確認が可能です。
                コードは下記Githubリンクからご覧になれます。
                <a class="text-blue-500" href="https://github.com/shoppie70/FishingTournamentEntryForm" target="_blank" rel="noopener">https://github.com/shoppie70/FishingTournamentEntryForm</a>

                大会の公式ページについては現在、構築中です。
                以下のURLからご覧になれます。
                <a class="text-blue-500" href="https://staging.maeda-hai.com" target="_blank" rel="noopener">https://staging.maeda-hai.com</a>
                ',
                'detail_img' => asset('works/maedahai.jpg'),
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
