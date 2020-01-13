<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Constants\DeleteStatus;

class CollectionsController extends Controller
{
    public function __construct(
        Category $category,
        Product $product
    ) {
        $this->category = $category;
        $this->product = $product;
    }
    /**
     * Show the application collection.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCollection(Request $request)
    {
        try {
            $products = $this->product->getProduct($request);
            $categories = $this->category->getCategories();
            flashDanger($products->count(), __('flash.empty_data'));
            return view('frontends.pages.collections.index', [
                'products' => $products,
                'categories' => $categories
            ]);
        } catch (\ValidationException $e) {
            return exceptionError($e, 'frontends.pages.collections.index');
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
            $product = $this->product->where('is_delete', '<>', DeleteStatus::DELETED)
                ->where('slug', $slug)->firstOrFail();
            $relatedProducts = [];
            if($product && $product->category) {
                $categoryId = $product->category->id;
                $relatedProducts = $this->product->whereHas('category', function ($category) use ($categoryId) {
                    $category->where('id', $categoryId);
                })
                ->limit(20)
                ->inRandomOrder()
                ->get();
            }
            flashDanger($product->count(), __('flash.empty_data'));
            return view('frontends.pages.collections.collection-detail', [
                'product' => $product,
                'slug' => $slug,
                'relatedProducts' => $relatedProducts
            ]);
        } catch (\ValidationException $e) {
            return exceptionError($e, 'frontends.pages.collections.collection-detail');
        }
    }
}
