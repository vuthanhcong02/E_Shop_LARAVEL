<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Utilities\VNPay;
use Illuminate\Support\Facades\Mail;

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
        if($request->payment=='pay_later'){
            //send email
            $total = Cart::total();
            $subtotal = Cart::subtotal();
            $this->sendEmail($order,$total,$subtotal);
             //Xóa giỏ hàng
            Cart::destroy();
            //Trả về kết quả
            return redirect('checkout/result')->with('notice','Cảm ơn bạn đã đặt hàng vui lòng kiểm tra email!');
        }
        if($request->payment=='online_pay'){
            //Lấy url thanh toán VN Pay
            $data_url= VNPay::vnpay_create_payment([
                'vnp_TxnRef' => $order->id,
                'vnp_OrderInfo' => 'Đơn hàng',
                'vnp_OrderType' => 'billpayment',
                'vnp_Amount' => Cart::total(0,'','.')*23000, // giá trị $ sang VND
            ]);
            return redirect($data_url);
        }
    }
    public function vnPayCheck(Request $request){
        //Lấy data từ url (VN Pay gửi cho qua $vnp_Returnurl)
        $vnp_ReponseCode = $request->get('vnp_ResponseCode');//Mã tham chiếu của giao dịch 00==>thanh cong
        $vnp_TxnRef = $request->get('vnp_TxnRef');//Mã đơn hàng
        $vnp_Amount = $request->get('vnp_Amount');//Số tiền thanh toán
        // Kiểm tra data xem kết quả giao dịch có hợp lệ không
        if($vnp_ReponseCode != null){
            if($vnp_ReponseCode == 00){
                //send email
                $order = Order::where('id',$vnp_TxnRef)->first();
                $total = Cart::total();
                $subtotal = Cart::subtotal();
                $this->sendEmail($order,$total,$subtotal);
                Cart::destroy();
                return redirect('checkout/result')->with('notice','Thanh toán đơn hàng thành công!Vui lòng kiểm tra email');
            }
            else{
                //Xóa đơn hàng trong database
                Order::where('id',$vnp_TxnRef)->delete();
                return redirect('checkout/result')->with('notice','Thanh toán đơn hàng không thành công! Có lỗi xảy ra!');
            }
        }
    }
    public function show(){
        $notify = session()->get('notice');
        return view('Frontend.checkout.show',compact('notify'));
    }
    private function sendEmail($order,$total,$subtotal){
        $email_to = $order->email;
        Mail::send('Frontend.checkout.email',compact('order','total','subtotal'),function($message) use($email_to){
            $message->from('congvtc02@gmail.com','VTC-eShop');
            $message->to($email_to,$email_to);
            $message->subject('Thông báo đơn hàng bạn đặt');            
        });
    }
}
