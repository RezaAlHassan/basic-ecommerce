<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function orderstore(Request $request)
    {
        $order = new Order();
        $order->total = $request->total;
        $order->phone_number = $request->phone_number;
        $order->address = $request->address;
        $order->user_name = Auth::user()->name;
        $order->user_email = Auth::user()->email;
        $order->save();


        /*    $cart = session()->get('cart');

        $items = $cart['items'];

        foreach ($items as

            $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item['product_id'];
            $orderItem->quantity = $item['quantity'];
            $orderItem->price = $item['price'];
            $orderItem->product_name = $item['name'];
            $orderItem->save();
        }
    }*/
        return view('order-confirm');
    }
};
