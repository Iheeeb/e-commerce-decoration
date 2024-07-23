<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::All();
        return view ('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255', 
        'details' => 'required|string', 
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

    $input = $request->all();
    if ($image = $request->file('image')) {
        $dest = 'images/';
        $prodimg = date("YmdHis") . "." . $image->getClientOriginalExtension();
        $image->move($dest, $prodimg);
        $input['image'] = $prodimg;
    }

    Product::create($input);
    return redirect()->route('products.index');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view ('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view ('products.edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'name'=>'required',
            'details'=>'required',
        ]);
        $input=$request->all();
        if($image=$request->file('image')){
            $dest='/images/';
            $prodimg = date("YmdHis").".".$image->getClientOriginalExtension();
            $image->move($dest,$prodimg);
            $input['image']="$prodimg";

        }else{
            unset($input['image']);
        }
        $product->update($input);
        return redirect()->route('products.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('products.index');

    }
}
