<?php

namespace App\Http\Controllers\Backends;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class SalesController extends Controller
{
    public function __construct(
        Category $category,
        Product $product
    ) {
        $this->category = $category;
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
          
            return view('backends.sales.index', [
                'request' => $request,
            ]);
        } catch (\ValidationException $e) {
            return exceptionError($e, 'backends.sales.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            return view('backends.sales.create', [
                'request' => $request,
            ]);
        } catch (\ValidationException $e) {
            return exceptionError($e, 'backends.sales.create');
        }
    }
}
