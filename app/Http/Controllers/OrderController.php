<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('products')->get();

        return view('sales.orders.index', compact('orders'));
    }

    // public function create()
    // {
    //     return view("sales.orders.create");
    // }

    public function create()
    {
        $products = Product::all();
        return view('sales.orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        // $request->validate([
            
        // ]);
        // dd($request);
        $order = Order::create([
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'address' => $request->address,
            'phone' => $request->phone,
            'status' => $request->status,
            'payment_method' => $request->payment_method,
            'user_id' => $request->user_id
        ]);

        $products = $request->input('products', []);
        // dd($products);
        $quantities = $request->input('quantities', []);
        for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $order->products()->attach($products[$product], ['quantity' => $quantities[$product]]);
            }
        }

        return redirect()->route('orders.index');
    }
}
