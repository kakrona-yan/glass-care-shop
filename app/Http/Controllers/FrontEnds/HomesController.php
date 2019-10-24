<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home(Request $request)
    {
        return view('frontends.home');
    }
}
