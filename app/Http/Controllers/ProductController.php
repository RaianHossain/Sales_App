<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view("components.layouts.products.index", ['products' => $products]);
    }
    
    public function create()
    {
        return view("components.layouts.products.create");
    }

    public function product_details()
    {
        return view("components.layouts.products.product_details");
    }

    public function uploadImage($file)
    {        
        $fileName = time().'.'.$file->getClientOriginalExtension();
        Image::make($file)
                ->resize(200, 200)
                ->save(storage_path().'/app/public/images/'.$fileName);
        return $fileName;
    }

    public function store(Request $request)
    {
        

        
        try{

            $imageValidationRule = 'image|mimes:png,jpg,jpeg,gif|dimensions:min_width=100,min_height=200|max:100';
            // dd($request->isMethod('post'));
            if($request->isMethod('post')){
                $imageValidationRule = 'required|'.$imageValidationRule;
            }
            $request->validate([
                'name'=> 'required|unique:products,name',
                'description' => 'required',
                'price' => 'required|numeric',
                'quantity' => 'required|numeric',
                'box_quantity' => 'required|numeric',
                'picture' => $imageValidationRule
            ]);

            Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'box_quantity' => $request->box_quantity,
                'picture' => $this->uploadImage(request()->file('picture')),
            ]);

            // $request->session()->flash('message', 'Task was successful!');
            return redirect()->route('products.index')->withMessage('Successfully Created!');
        }catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
            // dd($e->getMessage());
        }
    }

    public function show(Product $product)
    {
        return view('components.layouts.products.show', [
            'product' => $product
        ]);
    }


}