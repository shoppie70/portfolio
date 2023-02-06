<?php

namespace App\ViewModels;

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
}
