<?php

namespace App\Http\Controllers\FrontEnds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('frontends.home');
    }
}
