<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Constants\DeleteStatus;
use App\Models\Contact;

class PagesController extends Controller
{
    public function __construct(
        Category $category,
        Product $product,
        Contact $contact
    ) {
        $this->category = $category;
        $this->product = $product;
        $this->contact = $contact;
    }
    /**
     * Show the application about.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('frontends.pages.about');
    }

    /**
     * Show the application look.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function look()
    {
        try {
            $products = $this->product->where('is_delete', '<>', DeleteStatus::DELETED)
                ->get();
            $categories = $this->category->getCategories();
            flashDanger($products->count(), __('flash.empty_data'));
            return view('frontends.pages.look', [
                'products' => $products,
                'categories' => $categories
            ]);
        } catch (\ValidationException $e) {
            return exceptionError($e, 'frontends.pages.look');
        }
    }

    /**
     * Show the application about.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('frontends.pages.contact');
    }

    /**
     * Show the application about.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postContact(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|max:40',
                'email' => 'required|email',
            ]);
            $contacts = $request->all();
            $this->contact->create($contacts);
            return \Redirect::route('contact')
                ->with('success', __('Successfully send message!'));
        } catch (\ValidationException $e) {
            return exceptionError($e, 'frontends.pages.contact');
        }
    }
    /**
     * Show the application shop.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shop()
    {
        return view('frontends.pages.shop');
    }
}
