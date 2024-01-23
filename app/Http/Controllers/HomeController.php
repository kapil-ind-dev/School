<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index(){
        echo view('front/common/header');
        echo view('front/pages/login');
        echo view('front/common/header');
    }
    public function signup(){
        echo view('front/common/header');
        echo view('front/pages/sign-up');
        echo view('front/common/header');
    }
    public function forgot_password(){
        echo view('front/common/header');
        echo view('front/pages/forgot-password');
        echo view('front/common/header');
    }
    public function reset_password(){
        echo view('front/common/header');
        echo view('front/pages/reset-password');
        echo view('front/common/header');
    }
    public function signupcode(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->dob = $request->input('dob');
        $user->password = Hash::make('abc@123');
        $res = $user->save();
        if($res){
           return redirect('sign-in');
        }else{
            return Redirect::back();
        }

    }
    public function user_profile(){
        // print_r(Auth::user());
        echo view('front/common/header');
        echo view('front/pages/profile');
        echo view('front/common/header'); 
    }
    public function signincode(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $credentials = $request->validate(['email' => ['required', 'email'],'password' => ['required']]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('profile');
        }
        return back()->withErrors([
            'email' => 'Invalid Users!',
        ])->onlyInput('email');
        
    }
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('sign-in');
    }
}
