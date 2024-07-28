<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


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







    public function placeOrder(Request $request)
    {
        // Vérifiez que l'utilisateur est authentifié
        $user = auth()->user();
    
        // Récupérer les informations du panier depuis la session
        $cart = Session::get('cart');
    
        // Vérifier si le panier est vide
        if (empty($cart)) {
            return redirect()->route('checkout')->with('error', 'Votre panier est vide.');
        }
    
        // Calculer le total de la commande
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        $total = $subtotal + 10; // Ajouter les frais de livraison
    
        // Créer le contenu de la commande sous forme de chaîne de caractères
        $content = '';
        foreach ($cart as $item) {
            $content .= $item['name'] . ' x ' . $item['quantity'] . ', ';
        }
        $content = rtrim($content, ', ');
    
        // Créer et sauvegarder la nouvelle commande
        $order = new Order();
        $order->idclient =  auth()->user()->id;
        $order->clientname =  auth()->user()->name;
        $order->date = now();
        $order->content = $content;
        $order->total = $total;
        $order->state = 'en attente de confirmation'; // État par défaut
        $order->save();
    
        // Vider le panier après la commande
        Session::forget('cart');
    
        // Rediriger vers la page de checkout avec un message de succès
        return redirect()->route('checkout')->with('success', 'Votre commande a été passée avec succès!');
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
