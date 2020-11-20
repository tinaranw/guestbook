<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request){
        $admin = [
            'email'=>$request->email,
            'password'=>$request->password,
            'role_id>'=>1,
            'is_login'=>'0'
        ];
        $creator = [
            'email'=>$request->email,
            'password'=>$request->password,
            'role_id>'=>2,
            'is_login'=>'0'
        ];
        $user = [
            'email'=>$request->email,
            'password'=>$request->password,
            'role_id>'=>3,
            'is_login'=>'0'
        ];
        if (Auth::attempt($admin)){
            $this->isLogin(Auth::id());
        }
    }
    public function logout(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        $user->update([
            'is_login' => 0,
        ]);
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('login');
    }

    public function isLogin(int $id){
        $user = User::findOrFail($id);
        return $user->update([
            'is_login'=>'1',
        ]);
    }
}
