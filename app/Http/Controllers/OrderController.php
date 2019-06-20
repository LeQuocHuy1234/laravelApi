<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use DB;
use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    public function store(OrderRequest $request)
    {
        DB::beginTransaction();
        try {
            $createOrder = Order::create([
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'amount' => $request->amount
            ]);


            foreach($request->orderDetail as $data) {
                OrderDetail::create([
                    'order_id' => $createOrder['id'],
                    'product_id' => $data['id'],
                    'amount' => $data['amount'],
                    'qty' => $data['qty'],
                ]);
            }
            $succsess = ["success" => "Thành Công"];
            DB::commit();
            return response()->json($succsess);  
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }
}
