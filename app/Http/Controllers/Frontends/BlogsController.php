<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;
use App\Http\Constants\DeleteStatus;

class BlogsController extends Controller
{
    public function __construct(
        News $news,
        Category $category
    ) {
        $this->news = $news;
        $this->category = $category;
    }
    /**
     * Show the application News.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getNews(Request $request)
    {
        try {
            $blogs = $this->news->filter($request);
            $blogSliders = $this->news->where('is_delete', '<>', DeleteStatus::DELETED)
                ->orderBy('id', 'DESC')
                ->limit(10)
                ->get();
            return view('frontends.pages.news.index', [
                'request' => $request,
                'blogs' => $blogs,
                'blogSliders' => $blogSliders
            ]);
        } catch (\ValidationException $e) {
            return exceptionError($e, 'frontends.pages.news.index');
        }
    }

    public function getNewsBySlug(Request $request, $slug)
    {
        return view('frontends.pages.news.news-detail', [
            'slug' => $slug
        ]);
    }
}
