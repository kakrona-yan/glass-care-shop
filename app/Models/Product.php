<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'product_code', 
        'product_import',
        'price',
        'price_discount',
        'thumbnail',
        'promotion_banner',
        'description',
        'is_active',
        'is_delete'
    ];

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
}
