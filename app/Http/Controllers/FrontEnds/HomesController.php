<?php

namespace App\Http\Controllers\FrontEnds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('frontends.home');
    }
}
