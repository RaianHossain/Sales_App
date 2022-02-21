<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view("components.layouts.products.index");
    }
    
    public function create()
    {
        return view("components.layouts.products.create");
    }

    public function product_details()
    {
        return view("components.layouts.products.product_details");
    }


}