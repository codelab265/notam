<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Notifications\OrderConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Notification;

class CheckoutController extends Controller
{
    public function index()
    {
        if (!Session::has('cart') || count(Session::get('cart')['items']) === 0) {
            return redirect()->route('shop')->with('error', 'Your cart is empty!');
        }

        return view('checkout', [
            'cart' => Session::get('cart')
        ]);
    }

    public function process(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:20',
            'country' => 'required|string|max:255',
        ]);

        $cart = Session::get('cart');

        // Create Order
        $order = Order::create([
            'order_number' => 'ORD-' . strtoupper(Str::random(10)),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'country' => $request->country,
            'total_amount' => $cart['totalPrice'],
            'payment_status' => 'completed',
            'payment_method' => 'direct',
        ]);

        // Create Order Items
        foreach ($cart['items'] as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['item']->id,
                'quantity' => $item['qty'],
                'price' => $item['price'],
            ]);
        }

        // Send Order Confirmation Notification
        Notification::route('mail', $request->email)
            ->notify(new OrderConfirmation($order));

        // Clear Cart
        Session::forget('cart');

        return redirect()->route('shop')->with('success', 'Order placed successfully! We will contact you soon.');
    }
}
