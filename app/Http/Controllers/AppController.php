<?php

namespace App\Http\Controllers;

use App\ViewModels\TopPageViewModel;

class AppController extends Controller
{
    public function index()
    {
        $viewModel = new TopPageViewModel();

        return view('index', $viewModel);
    }
}
