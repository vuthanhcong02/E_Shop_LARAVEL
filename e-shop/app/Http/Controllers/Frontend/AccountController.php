<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AccountController extends Controller
{
    //
    public function login(){
        return view('Frontend.account.login');
    }
    public function checkLogin(Request $request){
        //
        $dataInfor = [
            'email' => $request->email,
            'password' => $request->password,
            'level'=>2
        ];
        $remember_pass = $request->save_pass;
        if(Auth::attempt($dataInfor,$remember_pass)){
            return redirect('/');
        }
        else{
            return redirect()->back()->with('error','Đăng nhập không thành công.Vui lòng kiểm tra lại!');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function register(){
        return view('Frontend.account.register');
    }
    public function postRegister(Request $request){
        //
        if($request->password != $request->con_pass ){
            return redirect()->back()->with('error','Mật khẩu không trùng khớp!');
        }
        $email_exsist = User::where('email',$request->email)->first();
        if($email_exsist){
            return redirect()->back()->with('error','Email đã tồn tại! Hãy sử dụng email khác!');
        }
        $dataInfor = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 2,
        ];
        User::create($dataInfor);
        return redirect('/account/login')->with('notice','Đăng ký thành công! Xin mời đăng nhập!');
    }
}
