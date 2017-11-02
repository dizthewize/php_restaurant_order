<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    // public function step1()
    // {
    //   if(Auth::check()) {
    //     return redirect()->route('checkout.shipping');
    //   } else {
    //
    //     return redirect('login');
    //   }
    //
    // }

    // public function shipping()
    // {
    //   return view('pages.shipping-info');
    // }

    public function payment()
    {
      return view('pages.payment');
    }

    // ->with('success', 'Your order is now being prepared! We will contact you soon')

    public function storePayment(Request $request)
    {

      // Set your secret key: remember to change this to your live secret key in production
      // See your keys here: https://dashboard.stripe.com/account/apikeys
      \Stripe\Stripe::setApiKey("sk_test_AA8RELe8B8A4AsLH1m1oDIpg");

      // Token is created using Stripe.js or Checkout!
      // Get the payment token submitted by the form:
      // $token = $request->stripeToken;
      $token = $_POST['stripeToken'];

      // $customer = \Stripe\Customer::create(array(
      //     'email' => Auth::user()->email,
      //     'source'  => $token
      // ));

      $charge = \Stripe\Charge::create(array(
          // 'customer' => $customer->id,
          'amount'   => Cart::total()*100,
          'currency' => 'usd',
          'source'   => $token
      ));

      // Create the order
      $user = Auth::user();
      $order = $user->order()->create([
        'user_id' => Auth::user()->id,
        'user_name' => Auth::user()->name,
        'total' => Cart::total(),
        'delivered' => 0
      ]);

      $cartItems = Cart::content();
      foreach ($cartItems as $cartItem) {
        $order->orderItems()->attach($cartItem->id, [
          'qty' => $cartItem->qty,
          'total' => $cartItem->qty*$cartItem->price
        ]);
      }

      Cart::destroy();
      return redirect()->route('cart.index')->with('success', 'Your order has been placed, you may contact us to check on the status before your arrival');

        // // Create Order ..remember table item goes first before equaling other factors
        // $order = new Order;
        // $order->user_id = Auth::user()->id;
        // $order->user_name = Auth::user()->name;
        // $order->total = Cart::total();
        // $order->save();
    }

}
