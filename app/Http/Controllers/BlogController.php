<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class BlogController extends Controller
{
    public function blog(): Application|Factory|View
    {
        return view('blog');
    }

    public function sitefeedback(): Application|Factory|View
    {
        return view('blogposts.sitefeedback');
    }

    public function studychoice(): Application|Factory|View
    {
        return view('blogposts.studychoice');
    }

    public function programxp(): Application|Factory|View
    {
        return view('blogposts.programxp');
    }

    public function swotanalysis(): Application|Factory|View
    {
        return view('blogposts.swotanalysis');
    }

    public function ictfieldwork(): Application|Factory|View
    {
        return view('blogposts.ictfieldwork');
    }

    public function firstfeedback(): Application|Factory|View
    {
        return view('blogposts.firstfeedback');
    }
}
