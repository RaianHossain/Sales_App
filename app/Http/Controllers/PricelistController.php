<?php

namespace App\Http\Controllers;

use App\Models\Pricelist;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class PricelistController extends Controller
{
    public function index()
    {
        $pricelists = Pricelist::latest()->get();
        return view("components.layouts.pricelists.index", ['pricelists' => $pricelists]);
    }
    
    public function create()
    {
        return view("components.layouts.pricelists.create");
    }

    public function store(Request $request){
        
        try{
            $request->validate([
                'name'=> 'required|unique:pricelists,name',
                'discount_percentage' => 'required|numeric',
                'minimum_order' => 'required|numeric'
            ]);

            Pricelist::create([
                'name' => $request->name,
                'discount_percentage' => $request->discount_percentage,
                'minimum_order' => $request->minimum_order,
            ]);

            // $request->session()->flash('message', 'Task was successful!');
            return redirect()->route('pricelists.index')->withMessage('Successfully Created!');
        }catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
            // dd($e->getMessage());
        }

    }
}
