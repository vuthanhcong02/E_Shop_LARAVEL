<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utilities\Constant;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    //
    public function index(){
        $count_order = Order::count();
        $total_order = OrderDetail::sum('total');
        return view('Dashboard.index',compact('count_order','total_order'));
    }
    public function getLogin(){
        return view('Dashboard.login');
    }
    public function checkLogin(Request $request){
        $dataInfor = [
            'email' => $request->email,
            'password' => $request->password,
            'level'=> [Constant::USER_LEVEL_ADMIN,Constant::USER_LEVEL_MANAGER],
        ];
        $remember_pass = $request->save_pass;
        // $remember_pass = false;
        if(Auth::attempt($dataInfor,$remember_pass)){
            //return redirect('/');
            return redirect()->intended('/admin/');//chuyển hướng người dùng đến trang mà họ đang cố gắng truy cập trước khi yêu cầu xác thực (nếu có), và nếu không có trang đích xác định, nó sẽ chuyển hướng người dùng đến đường dẫn /.
        }
        else{
             // Xóa cookie "remember_web_" nếu đăng nhập không thành công
            // Cookie::queue(Cookie::forget('remember_web_'));
            return redirect()->back()->with('notice-error','Đăng nhập không thành công.Vui lòng kiểm tra lại!');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/admin/login');
    }
}
