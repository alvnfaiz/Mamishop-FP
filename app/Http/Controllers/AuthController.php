<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function loginUser()
    {
        return view('auth.login');
    }

    public function loginAction(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        
        if($user){
            if($user->password == Hash::make($request->password)){
                $request->session()->put('user', $user);
                if($user->role == 'admin'){
                    return redirect('/dashboard');
                }
                if($user->role == 'user'){
                    return redirect(route('home'));
                }
            }
            else{
                return redirect('/login')->with('error', 'Password salah');
            }
        }else{
            return redirect('/login')->with('error', 'Username tidak ditemukan');
        }
    }
}
