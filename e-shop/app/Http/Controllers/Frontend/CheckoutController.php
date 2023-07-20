<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    //
    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('Frontend.checkout.index',compact('carts','total','subtotal'));
    }
}
