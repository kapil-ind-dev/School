<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index(){
        echo view('admin/pages/login');
    }
    // public function dashboard(){
    //     echo view('admin/common/header');
    //     echo view('admin/pages/sign-up');
    //     echo view('admin/common/header');
    // }
}
