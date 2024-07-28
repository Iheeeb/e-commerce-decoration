<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function product_details($id)
     {
         // Retrieve the product using the provided ID
         $product = Product::findOrFail($id);
         $Products = Product::where('category', $product->category)
         ->where('id', '!=', $product->id) // Exclude the current product
         ->get();


         // Pass the product data to the detail view
         return view('client.detail', compact('product','Products'));
     }






     
     public function addToCart(Product $product, Request $request)
     {
         // Validate the quantity input
         
     
         // Get the current cart from the session
         $cart = session()->get('cart', []);
     
         // Determine the quantity to add
         $quantityToAdd = $request->input('q', 1); // Default to 1 if 'q' is not set
     
         // Check if the product is already in the cart
         if (isset($cart[$product->name])) {
             // Increment the quantity of the existing product
             $cart[$product->name]['quantity'] += $quantityToAdd;
         } else {
             // Add the product to the cart with the specified quantity
             $cart[$product->name] = [
                 "name" => $product->name,
                 "price" => $product->price,
                 "quantity" => $quantityToAdd
             ];
         }
     
         // Store the cart back in the session
         session()->put('cart', $cart);
     
         // Update the cart counter
         $cartCount = array_sum(array_column($cart, 'quantity'));
         session()->put('cart_count', $cartCount);
     
         // Redirect back with a success message
         return back()->with('success', 'Product added to cart successfully!');
     }
     

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
    $categories = Category::all(); // Assurez-vous d'avoir importé votre modèle Category
    return view('admin.products.create', compact('categories'));
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
    $categories = Category::all(); // Récupère toutes les catégories
    return view('admin.products.edit', compact('product', 'categories'));
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
