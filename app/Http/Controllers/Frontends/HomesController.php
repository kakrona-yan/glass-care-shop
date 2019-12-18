<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Constants\DeleteStatus;

class HomesController extends Controller
{
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
   /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $products = $this->product->where('is_delete', '<>', DeleteStatus::DELETED)
            ->orderBy('id', 'DESC')
            ->paginate(config('pagination.product_limit'));
        flashDanger($products->count(), __('flash.empty_data'));
        return view('frontends.home', [
            'products' => $products,
        ]);
    }
}
