<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Constants\DeleteStatus;

class Product extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'product_code', 
        'product_import',
        'price',
        'price_discount',
        'product_free',
        'thumbnail',
        'promotion_banner',
        'description',
        'in_store',
        'out_store',
        'is_active',
        'is_delete'
    ];

    /**
     * The product that belong to the category
     * From table user
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    
    public function filter($request)
    {
        $products = $this->where('is_delete', '<>', DeleteStatus::DELETED)
            ->orderBy('id', 'DESC');
        // Check flash danger
        flashDanger($products->count(), __('flash.empty_data'));
        $limit = config('pagination.limit');
        if ($request->exists('limit') && !is_null($request->limit)) {
            $limit = $request->limit;
        }
        return $products->paginate($limit);
    }

    public function getProduct($request)
    {
        $products = $this->where('is_delete', '<>', DeleteStatus::DELETED);
        dd($request->page_category);
        if (!empty($request->page_category)) {
            $products->where('category_id', $request->page_category);
        }
        return $products->orderBy('id', 'DESC')->paginate(config('pagination.product_limit'));
    }
}
