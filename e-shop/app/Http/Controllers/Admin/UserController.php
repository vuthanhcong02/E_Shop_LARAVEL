<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Utilities\Common;
use App\Http\Requests\Admin\UserRequest;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request->search ?? '';
        if (!$search) {
            $users = User::orderBy('id', 'desc')->paginate(5);
        }
        else{
            $users = User::where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%')
                ->orderBy('id', 'desc')->paginate(5);
        }
        // $users = User::orderBy('id', 'desc')->paginate(5);
        return view('Dashboard.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('Dashboard.user.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        //
        if($request->password!= $request->password_confirmation){
            return redirect()->back()->with('notice-error', 'Password does not match');
        }
        $email_exsist = User::where('email',$request->email)->first();
        if($email_exsist){
            return redirect()->back()->with('notice-error', 'Email already exist');
        }
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        // hanlde upload file image
        if($request->hasFile('image')){
            $data['avatar'] = Common::uploadFile($request->file('image'), 'Frontend/img/user');
        }

        User::create($data);
        return redirect('/admin/user')->with('notice-success', 'Create user successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = User::find($id);
        if(!$user){
            return redirect()->back()->with('notice-error', 'User not found');
        }
        return view('Dashboard.user.show',compact('user'));
        // return view('Dashboard.user.add');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user,string $id)
    {
        //
        $user = User::find($id);
        return view('Dashboard.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // Lấy ra model User với $id
        $user = User::find($id);

        // Kiểm tra nếu không tìm thấy user với $id
        if (!$user) {
            return redirect()->back()->with('notice-error', 'User not found');
        }

        $data = $request->all();
        // $data = $request->except('image_old');
        if($request->password != null){
            if($request->password!= $request->password_confirmation){
                return redirect()->back()->with('notice-error', 'Password does not match');
            }
            $data['password'] = bcrypt($request->password);
        }
        else{
            unset($data['password']);
        }
        // hanlde upload file image
        if($request->hasFile('image')){
            // Thêm file mới
            $data['avatar'] = Common::uploadFile($request->file('image'), 'Frontend/img/user');
            // xoa file cu
            $file_avatar_old = $request->image_old;
            if($file_avatar_old !=''){
                unlink('Frontend/img/user/'.$file_avatar_old);
            }
        }
        $email_exsist = User::where('email',$request->email)
                                ->where('id','!=',$user->id)->first();
        if($email_exsist){
            return redirect()->back()->with('notice-error', 'Email already exist');
        }
        $user->update($data);
        return redirect('/admin/user/'.$user->id)->with('notice-success', 'Update user successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        $file_name = $user->avatar;
        $user->delete();
        if($file_name !=''){
            unlink('Frontend/img/user/'.$file_name);
        }
        return redirect('/admin/user')->with('notice-success', 'Delete user successfully');
    }
}
