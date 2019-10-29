<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Show the application News.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getNews(Request $request)
    {
        return view('frontends.pages.news.index');
    }
}
