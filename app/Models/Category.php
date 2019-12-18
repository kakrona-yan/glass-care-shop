<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Constants\DeleteStatus;
use App\Http\Constants\CategoryType;
use App\Models\Product;

class Category extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug', 
        'parent_id',
        'category_type',
        'is_active',
        'is_delete'
    ];

    public static function boot()
    {
        parent::boot();
    }

    public function childs()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }
    
    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'category_id');
    }
    
    public function news()
    {
        return $this->belongsToMany('App\Models\News', 'category_id');
    }

    public function getCategoryName()
    {
        return $this->pluck('name','id')
            ->all();
    }

    public function getCategoryNameByProducts()
    {
        return $this->pluck('name','id')
            ->where('category_type', CategoryType::CATEGORY_TYPE_PRODUCT)
            ->all();
    }

    public function getCategoryNameByNews()
    {
        return $this->pluck('name','id')
            ->where('category_type', CategoryType::CATEGORY_TYPE_NEWS)
            ->all();
    }

    public function filter($request)
    {
        $categories = $this->where('is_delete', '<>', DeleteStatus::DELETED)
            ->orderBy('id', 'DESC');
        // Check flash danger
        flashDanger($categories->count(), __('flash.empty_data'));
        $limit = config('pagination.limit');
        if ($request->exists('limit') && !is_null($request->limit)) {
            $limit = $request->limit;
        }
        return $categories->paginate($limit);
    }

    public function CategoryType()
    {
        $categoryType = $this->category_type;
        $categoryTypeText = '';
        if (is_null($categoryType) && empty($categoryType)) return;
        switch ($categoryType) {
            case 0:
                $categoryTypeText = CategoryType::CATEGORY_TYPE_TEXT[$categoryType];
                break;
            case 1:
                $categoryTypeText = CategoryType::CATEGORY_TYPE_TEXT[$categoryType];
                break;
        }
        return $categoryTypeText;
    }
    public function getCategories() {
        return $this->withCount('products')
            ->where('category_type', CategoryType::CATEGORY_TYPE_PRODUCT)
            ->get();
    }
    
}
