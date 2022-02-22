<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdertoInvoiceController extends Controller
{
    public function index()
    {
        return view("sales.orders_to_invoice.index");
    }

    public function create()
    {
        return view("sales.orders_to_invoice.create");
    }
}
