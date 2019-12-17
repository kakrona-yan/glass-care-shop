<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Constants\DeleteStatus;

class CollectionsController extends Controller
{
    public function __construct(Product $product) {
        $this->product = $product;
    }
    /**
     * Show the application collection.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCollection()
    {
        try {
            $products = $this->product->where('is_delete', '<>', DeleteStatus::DELETED)
                ->orderBy('id', 'DESC')
                ->paginate(config('pagination.product_limit'));
            flashDanger($products->count(), __('flash.empty_data'));
            return view('frontends.pages.collections.index', [
                'products' => $products,
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
            return view('frontends.pages.collections.collection-detail', [
                'slug' => $slug,
            ]);
        } catch (\ValidationException $e) {
            return exceptionError($e, 'frontends.pages.collections.collection-detail');
        }
    }
}
