<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
class ProductControllder extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
   {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'Productype' => 'required',
                'ProductCode' => 'required'
            ]
        );
        
    
       $data = $request -> all();
       $data['Productype'] = $request -> Productype;
       $data['ProductCode'] = $request -> ProductCode;
       $data['ProductName'] = $request -> ProductName;
       $data['Quantity'] = $request -> Quantity;
       $data['note'] = $request -> note;
       
       
       Product::create($data);
        
        return \redirect('product/index')->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = product::find($id);
        return view('/update',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = product::find($id);
       $product -> Productype = $request -> Productype;
       $product -> ProductCode = $request -> ProductCode;
       $product -> ProductName = $request -> ProductName;
       $product -> Quantity = $request -> Quantity;
       $product -> note = $request -> note;
       return \redirect('/product/index')-> with('success','') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
