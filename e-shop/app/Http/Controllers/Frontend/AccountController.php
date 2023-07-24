<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
}
