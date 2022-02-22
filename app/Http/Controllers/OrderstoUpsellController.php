<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderstoUpsellController extends Controller
{
    public function index()
    {
        return view("components.layouts.orders_to_upsell.index");
    }
    
    public function create()
    {
        return view("components.layouts.orders_to_upsell.create");
    }

}
