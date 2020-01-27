<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Constants\DeleteStatus;
use App\Models\Contact;
use Carbon\Carbon;
use App\Models\News;

class PagesController extends Controller
{
    public function __construct(
        Category $category,
        Product $product,
        Contact $contact,
        News $news
    ) {
        $this->category = $category;
        $this->product = $product;
        $this->contact = $contact;
        $this->news = $news;
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
                ->where('is_active', 1)
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

    public function siteMap()
    {
        $date = date('2018-10-04 10:30:30');
        $datePublic = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date);
        $sitemapRoutes = [
            [
                'name' => '/',
                'date' => $datePublic
            ],
            [
                'name' => '/shop',
                'date' => $datePublic
            ],
            [
                'name' => '/look',
                'date' => $datePublic
            ],
            [
                'name' => '/about',
                'date' => $datePublic
            ],
            [
                'name' => '/blog',
                'date' => $datePublic
            ]
        ];
        $products = $this->product->where('is_delete', '<>', DeleteStatus::DELETED)
            ->where('is_active', 1)
            ->get();
        $blogs = $this->news->where('is_delete', '<>', DeleteStatus::DELETED)
            ->where('is_active', 1)
            ->get();
        return response()->view('frontends.sitemap', [
            'sitemapRoutes' =>  $sitemapRoutes,
            'products' => $products,
            'blogs' => $blogs
        ])->header('Content-Type', 'text/xml');
    }
    
}
