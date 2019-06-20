<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';

    protected $fillable = [
        'name','address','phone','email','amount',
    ];

    public function order_detail()
    {
    	return $this->hasMany('App\Models\Order_detail','order_id','id');
    }
}
