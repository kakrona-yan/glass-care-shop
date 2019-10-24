<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    /**
     * Show the application collection.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCollection()
    {
        $slug = 'iphone-x';
        try {
            return view('frontends.pages.collection.index', [
                'slug' => $slug,
            ]);
        } catch (\ValidationException $e) {
            return exceptionError($e, 'frontends.pages.collection.index');
        }
    }

    /**
     * Show the application collection.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCollectionBySlug($slug)
    {
        try {
            return view('frontends.pages.collection.collection-detail', [
                'slug' => $slug,
            ]);
        } catch (\ValidationException $e) {
            return exceptionError($e, 'frontends.pages.collection.collection-detail');
        }
    }
}
