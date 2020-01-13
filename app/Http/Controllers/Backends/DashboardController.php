<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Constants\DeleteStatus;

class DashboardController extends Controller
{
    public function __construct(Product $product) {
        $this->product = $product;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productCount = $this->product->count();
        $products = $this->product->where('is_delete', '<>', DeleteStatus::DELETED)->paginate(config('pagination.limit'));
        return view('backends.dashboard', [
            'productCount' => $productCount,
            'products' => $products
        ]);

    }
}
