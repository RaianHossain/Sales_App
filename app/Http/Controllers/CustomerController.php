<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers =  customer::latest()->get();
        return view('sales.customers.index',['customers'=> $customers]);
    }
    public function create()
    {
        return view("sales.customers.create");
    }
    public function store(Request $request){
        // dd(request()->all());
        try{
            $request->validate([
        
                'name'=> ['required','min:3'],
                'email'=> [''],
                'address'=> [''],
                'phone'=> ['required','min:11'],
            ]);
            customer::create([
                'name'=> $request->name,
                'email'=>$request->email,
                'address'=>$request->address,
                'phone'=>$request->phone,
    
            ]);
            // $request->session()->flash('massage', 'Task was successful!');
            // return redirect()->route('customers.index')->with('massage','Task was sussesfull');
            return redirect()->route('customers.index')->withMessage('Successfully Created!');
            // dd('Hello');
            

        }
        catch(QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
            
            //dd($e->getMessage());

        }

        

        
    }

}
