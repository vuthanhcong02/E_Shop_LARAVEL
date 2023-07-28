<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::orderBy('id', 'desc')->paginate(5);
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
    public function store(Request $request)
    {
        //
        if($request->password!= $request->password_confirmation){
            return redirect()->back()->with('notice', 'Password does not match');
        }
        $email_exsist = User::where('email',$request->email)->first();
        if($email_exsist){
            return redirect()->back()->with('notice', 'Email already exist');
        }
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        User::create($data);
        return redirect('/admin/user')->with('notice', 'Create user successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = User::find($id);
        return view('Dashboard.user.show',compact('user'));
        // return view('Dashboard.user.add');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
