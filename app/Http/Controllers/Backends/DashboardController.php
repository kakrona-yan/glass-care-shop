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
        $userCount = \App\Models\User::count();
        $staffCount = \App\Models\Staff::count();
        $customerCount = \App\Models\Customer::count();
        $categoryCount = \App\Models\Category::count();
        $newsCount = \App\Models\News::count();
        $products = $this->product->where('is_delete', '<>', DeleteStatus::DELETED)
            ->orderBy('id', 'desc')
            ->paginate(6);
        return view('backends.dashboard', [
            'productCount' => $productCount,
            'products' => $products,
            'userCount' => $userCount,
            'staffCount' => $staffCount,
            'customerCount' => $customerCount,
            'categoryCount' => $categoryCount,
            'newsCount' => $newsCount
        ]);

    }
}
