<?php

namespace App\Http\Controllers\FrontEnds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show the application about.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('frontends.pages.about');
    }

    /**
     * Show the application collection.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function collection()
    {
        return view('frontends.pages.collection.index');
    }

    /**
     * Show the application look.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function look()
    {
        return view('frontends.pages.look');
    }

    /**
     * Show the application about.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('frontends.pages.contact');
    }

    /**
     * Show the application shop.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shop()
    {
        return view('frontends.pages.shop');
    }

    /**
     * Show the application news.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function news()
    {
        return view('frontends.pages.news.index');
    }
}
