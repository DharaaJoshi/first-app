<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Frontend\HomeController;




class LoginController extends Controller
{
    public function login()
    {

        return view('Frontend.login_register');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect(route('home')) ->with("success","Signed in");
        }
        return redirect(route('login'))->with("error","Login details are not valid");
    }
    public function register()
    {

        return view('Frontend.login_register');
    }
    
    public function registerPost(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);

        $data['username']=$request->username;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $user= User::create($data);


      
    if (!$user) {
        return redirect(route('register'))->with("error", "User creation failed");
    }
    return redirect(route('login'))->with("success", "Registration successful. You can now log in.");

    }

}
