<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class PageController extends Controller
{
    public function welcome(): View|Factory|Application
    {
        return view('welcome');
    }

    public function profile(): Application|Factory|View
    {
        return view('profile');
    }

    public function games(): Application|Factory|View
    {
        return view('games');
    }

    public function dashboard(): Application|Factory|View
    {
        return view('dashboard');
    }

    public function faq(): Application|Factory|View
    {
        return view('faq');
    }
}
