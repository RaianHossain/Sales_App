<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricelistController extends Controller
{
    public function index()
    {
        return view("components.layouts.pricelists.index");
    }
    
    public function create()
    {
        return view("components.layouts.products.pricelists.create");
    }
}
