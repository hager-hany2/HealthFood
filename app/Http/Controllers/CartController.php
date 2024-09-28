<?php

namespace App\Http\Controllers;

use App\Http\Resources\ImageResource;
use App\Http\Resources\ProductResource;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{


//    public function index()
//    {
//        $products = Product::all();
//        $user = Auth::()->load('image');
//        return view('products', compact('products'));
//    }
//
//    public function cart()
//    {
//        return view('cart');
//    }
//
//    public function addToCart($id)
//    {
//        $product = product::findOrFail($id);
//
//        $cart = session()->get('cart', []);
//
//        if (isset($cart[$id])) {
//            $cart[$id]['quantity']++;
//        } else {
//            $cart[$id] = [
//
//                "product_name" => $product->name,
//                "price" => $product->price,
//                "description" => $product->description,
//                "quantity" => 1
//            ];
//        }
//
//        session()->put('cart', $cart);
//        return redirect()->back()->with('success', 'Product add to cart successfully!');
//    }
//
//    public function update(Request $request)
//    {
//        if ($request->id && $request->quantity) {
//            $cart = session()->get('cart');
//            $cart[$request->id]["quantity"] = $request->quantity;
//            session()->put('cart', $cart);
//            session()->flash('success', 'Cart successfully updated!');
//        }
//    }
//
//    public function remove(Request $request)
//    {
//        if ($request->id) {
//            $cart = session()->get('cart');
//            if (isset($cart[$request->id])) {
//                unset($cart[$request->id]);
//                session()->put('cart', $cart);
//            }
//            session()->flash('success', 'Product successfully removed!');
//        }
//    }
    public function index()
    {
        $cart = Session::get('cart', []); // Get the cart from the session
        return view('cart', compact('cart'));
    }

    // Add a product to the cart
    public function add(Request $request, $productId)
    {
        $product = Product::findOrFail($productId); // Fetch the product from the database

        // Retrieve the current cart
        $cart = Session::get('cart', []);

        // Check if the product is already in the cart
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
            ];
        }

        // Save the cart and back route
        Session::put('cart', $cart);

        return redirect()->route('Show.Shop')->with('success', 'Product added to cart!');
    }

    // Remove a product from the cart
    public function remove($productId)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Product removed from cart!');
    }


}
