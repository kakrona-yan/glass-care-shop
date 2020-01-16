<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Constants\DeleteStatus;
use App\Models\News;

class HomesController extends Controller
{
    public function __construct(
        Product $product,
        News $news
    ){
        $this->product = $product;
        $this->news = $news;
    }
   /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $products = $this->product->where('is_delete', '<>', DeleteStatus::DELETED)
            ->where('is_active', 1)
            ->orderBy('id', 'DESC')
            ->limit(12)
            ->get();
        $blogs = $this->news->where('is_delete', '<>', DeleteStatus::DELETED)
            ->where('is_active', 1)
            ->orderBy('id', 'DESC')
            ->limit(4)
            ->get();
        flashDanger($products->count(), __('flash.empty_data'));
        return view('frontends.home', [
            'products' => $products,
            'blogs' => $blogs
        ]);
    }
}
