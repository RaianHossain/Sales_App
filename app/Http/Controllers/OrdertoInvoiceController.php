<?php

namespace App\Http\Controllers;


use App\Exports\invoicesExport;
use App\Models\Order;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Excel;
use PDF;

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

    public function export()
    {
        return Excel::download(new invoicesExport, 'invoice.xlsx');
    }

    public function downloadPdf()
    {
        $invoice = Order::all();
        $pdf = PDF::loadView('sales.invoice.pdf', compact('orders'));
        return $pdf->download('invoice.pdf');
    }
}
