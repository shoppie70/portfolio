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

    public function skills(): array
    {
        return [
            '言語' => $this->my_languages(),
            '資格' => $this->qualifications(),
            'その他スキル' => $this->others()
        ];
    }

    public function my_languages(): array
    {
        return [
            'php',
            'HTML',
            'CSS',
            'JavaScript(npm,node.js,yarn,alpine.js)',
            'Python(djangoでの構築経験)'
        ];
    }

    public function qualifications(): array
    {
        return [
            '第二種電気工事士',
            '工事担任者 第二級デジタル通信'
        ];
    }

    public function others(): array
    {
        return [
            'gitによるバージョン管理',
            'Linuxの知識',
            '電気工事・電気通信工事',
            'PC修理・復旧',
            'ネットワーク構築',
            '動画制作（YouTubeチャンネル運営中）'
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
            [
                'title' => '飲食店 テイクアウトシステム',
                'img_path' => asset('works/takeout.jpg'),
                'abstract' => '在職中に顧客との打ち合わせから
                DB設計・デザイン・構築まで担当したシステムになります。

                フレームワークはLaravelを用いて開発しています。
                ショッピングカート機能は<a href="https://github.com/Crinsane/LaravelShoppingcart">LaravelShoppingcart</a>を使用しています。
                決済システムにはStripeを使っております。

                管理画面では、注文が入ると音が鳴るように作成しており、
                厨房でもテイクアウトの注文が入ったことが分かりやすくなっております。
                ',
                'detail_img' => asset('works/takeout.jpg'),
            ],
            [
                'title' => 'ホテル 予約システム',
                'img_path' => asset('works/hotel.jpg'),
                'abstract' => '在職中に顧客との打ち合わせから
                DB設計・デザイン・構築まで担当したシステムになります。

                フレームワークはLaravelを用いて開発しています。
                決済システムにはStripeを使っております。

                顧客からの要望により、予約が入った際は
                空き部屋を自動的に選択して割り振るシステムを取り入れています。

                特別料金設定や定休日設定も部屋ごとに設定可能です。
                ',
                'detail_img' => asset('works/hotel.jpg'),
            ],
            [
                'title' => '病院食堂 職員食予約システム',
                'img_path' => asset('works/smile.jpg'),
                'abstract' => '在職中に顧客との打ち合わせから
                DB設計・デザイン・構築まで担当したシステムになります。

                フレームワークはLaravelを用いて開発しています。
                このシステムは管理画面も含めて、基本的にCSSはTailwind CSSで作成しております。

                システム導入前は、職員さん達は日々の職員食を紙で予約しておりました。
                こちらのシステムを導入することで個人のスマホで職員食を予約できるようになりました。

                職員さんは移動や転勤があるので、病院の事務側の管理画面と
                食堂職員側の管理画面も作成しております。
                ',
                'detail_img' => asset('works/smile.jpg'),
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
