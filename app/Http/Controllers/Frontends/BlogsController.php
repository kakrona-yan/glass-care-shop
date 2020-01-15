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
        try {
            $news = $this->news->where('is_delete', '<>', DeleteStatus::DELETED)
                ->where('permalink', $slug)->firstOrFail();
            $relatedPosts = [];
            if ($news && $news->category) {
                $categoryId = $news->category->id;
                $relatedPosts = $this->news->whereHas('category', function ($category) use ($categoryId) {
                    $category->where('id', $categoryId);
                })
                ->limit(20)
                ->inRandomOrder()
                ->get();
            }
            flashDanger($news->count(), __('flash.empty_data'));
            return view('frontends.pages.news.news-detail', [
                'news' => $news,
                'slug' => $slug,
                'relatedPosts' => $relatedPosts
            ]);
        } catch (\ValidationException $e) {
            return exceptionError($e, 'frontends.pages.news.news-detail');
        }
    }
}
