<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleProduct extends Model
{
    protected $fillable = [
        'sale_id',
        'product_id',
        'rate',
        'quantity',
        'amount',
        'discount',
        'discount_type',
        'is_active',
        'is_delete'   
    ];
}
