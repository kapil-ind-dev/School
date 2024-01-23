<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
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
        $data = $request->input();
        print_r($data);
    }
}
