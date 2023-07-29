<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utilities\Constant;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    //
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
        if(Auth::attempt($dataInfor,$remember_pass)){
            //return redirect('/');
            return redirect()->intended('/admin/user');//chuyển hướng người dùng đến trang mà họ đang cố gắng truy cập trước khi yêu cầu xác thực (nếu có), và nếu không có trang đích xác định, nó sẽ chuyển hướng người dùng đến đường dẫn /.
        }
        else{
            return redirect()->back()->with('notice-error','Đăng nhập không thành công.Vui lòng kiểm tra lại!');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/admin/login');
    }
}
