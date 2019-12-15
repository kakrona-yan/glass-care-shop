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
}
