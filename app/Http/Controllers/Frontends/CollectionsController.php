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
            \Log::($request->query('category'));
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
            flashDanger($product->count(), __('flash.empty_data'));
            return view('frontends.pages.collections.collection-detail', [
                'product' => $product,
                'slug' => $slug
            ]);
        } catch (\ValidationException $e) {
            return exceptionError($e, 'frontends.pages.collections.collection-detail');
        }
    }
}
