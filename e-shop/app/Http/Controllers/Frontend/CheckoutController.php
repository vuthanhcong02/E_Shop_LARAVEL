<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
class CheckoutController extends Controller
{
    //
    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('Frontend.checkout.index',compact('carts','total','subtotal'));
    }
    public function addOrder(Request $request){
        //Thêm đơn hàng
        $order = Order::create($request->all());
        // echo $order;
        //Thêm chi tiết đơn hàng
        foreach(Cart::content() as $item){
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'amount' => $item->price,
                'qty' => $item->qty,
                'total'=> $item->price * $item->qty
            ]);
        }
        //Xóa giỏ hàng
        Cart::destroy();
        //Trả về kết quả
        return redirect('checkout/result')->with('success','Cảm ơn bạn đã đặt hàng vui lòng kiểm tra email!');
    }
    public function show(){
        $notify = session()->get('success');
        return view('Frontend.checkout.show',compact('notify'));
    }
}
