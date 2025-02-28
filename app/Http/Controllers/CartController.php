<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        return view('cart', [
            'cart' => Session::get('cart')
        ]);
    }

    public function add(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $cart = Session::get('cart', [
            'items' => [],
            'totalQty' => 0,
            'totalPrice' => 0
        ]);

        $productId = $product->id;

        if (isset($cart['items'][$productId])) {
            $cart['items'][$productId]['qty']++;
            $cart['items'][$productId]['price'] = $product->price * $cart['items'][$productId]['qty'];
        } else {
            $cart['items'][$productId] = [
                'qty' => 1,
                'price' => $product->price,
                'item' => $product
            ];
        }

        $cart['totalQty']++;
        $cart['totalPrice'] += $product->price;

        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function remove(Request $request)
    {
        $cart = Session::get('cart');
        $productId = $request->product_id;

        if (isset($cart['items'][$productId])) {
            $cart['totalQty'] -= $cart['items'][$productId]['qty'];
            $cart['totalPrice'] -= $cart['items'][$productId]['price'];
            unset($cart['items'][$productId]);
        }

        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Product removed from cart!');
    }
}
