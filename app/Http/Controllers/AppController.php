<?php

namespace App\Http\Controllers;

use App\ViewModels\TopPageViewModel;

class AppController extends Controller
{
    public function index()
    {
        $title = 'top';
        $viewModel = new TopPageViewModel($title);

        return view('index', $viewModel);
    }
}
