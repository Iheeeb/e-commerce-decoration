<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function indexCart()
     {
         // Fetch cart items from session or database
         $cart = session()->get('cart', []);

         $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

       
         
         // Return the cart view with cart items
         return view('client.cart', compact('cart','subtotal'));
     }
    
     public function removeFromCart($productName)
{
    // Decode the product name
    $productName = urldecode($productName);

    // Get the current cart from the session
    $cart = session()->get('cart', []);

    // Remove the product from the cart
    if (isset($cart[$productName])) {
        unset($cart[$productName]);
    }

    // Store the cart back in the session
    session()->put('cart', $cart);

    // Update the cart count
    $cartCount = count($cart);
    session()->put('cart_count', $cartCount);

    // Redirect back to the cart with a success message
    return redirect()->route('cart')->with('success', 'Product removed from cart successfully!');
}

    
    
     public function index()
    {
        $orders=Order::orderby('id','desc')->get();
       return view('admin.orders.index',compact('orders'));
    }


   /**
     * Confirm an order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request, $id)
    {
        // Trouver la commande par ID
        $order = Order::findOrFail($id);
        
        // Mettre à jour l'état de la commande
        $order->state = 'confirmé';
        $order->save();

        // Rediriger vers la page de détail de la commande ou une autre vue
        return redirect()->route('orders.index', $order->id)->with('success', 'Order confirmed.');
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Trouver la commande par ID
        $order = Order::findOrFail($id);

        // Retourner la vue avec la commande
        return view('admin.orders.index', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
       
     
        if ($order->delete()) {
            return redirect('orders');
        } else {
            return 'Error occurred while adding the category';
        }
    
    
    
    }
}
