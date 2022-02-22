<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view("components.layouts.orders.index");
    }
    
    public function create()
    {
        return view("components.layouts.orders.create");
    }
    
}
