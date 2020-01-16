<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Constants\DeleteStatus;

class News extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'title', 
        'permalink',
        'content',
        'thumbnail',
        'author',
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
        $news = $this->where('is_delete', '<>', DeleteStatus::DELETED)
            ->orderBy('id', 'DESC');
        // Check flash danger
        flashDanger($news->count(), __('flash.empty_data'));
        $limit = config('pagination.limit');
        if ($request->exists('limit') && !is_null($request->limit)) {
            $limit = $request->limit;
        }
        return $news->paginate($limit);
    }

    public function getNews($request)
    {
        $news = $this->where('is_delete', '<>', DeleteStatus::DELETED)
            ->where('is_active', 1)
            ->orderBy('id', 'DESC');
        // Check flash danger
        flashDanger($news->count(), __('flash.empty_data'));
        $limit = config('pagination.limit');
        if (!empty($request->category)) {
            $news->where('category_id', $request->category);
        }
        return $news->paginate($limit);
    }

    public static function latestNews()
    {
        return self::where('is_delete', '<>', DeleteStatus::DELETED)
            ->where('is_active', 1)
            ->orderBy('id', 'DESC')
            ->limit(5)
            ->get();
    }

}
