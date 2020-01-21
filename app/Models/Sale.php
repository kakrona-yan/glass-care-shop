<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends BaseModel
{
    protected $fillable = [
        'staff_id',
        'customer_id',
        'quotaion_no',
        'money_change',
        'total_quantity',
        'total_discount',
        'total_amount',
        'sale_date',
        'note',
        'is_active',
        'is_delete'   
    ];
    
    protected $dates = [
        'sale_date',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }

    public function staff()
    {
        return $this->belongsTo('App\Models\Staff', 'staff_id');
    }

    public function productSales()
    {
        return $this->hasMany('App\Models\SaleProduct', 'sale_id', 'id');
    }
}
