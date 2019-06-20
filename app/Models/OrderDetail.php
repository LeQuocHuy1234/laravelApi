<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table='order_details';

    protected $fillable = [
        'order_id','product_id','qty','amount',
    ];

    public function order_product()
    {
    	return $this->hasOne('App\Models\Product','id','product_id');
    }
}
