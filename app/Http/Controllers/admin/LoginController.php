<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //登录
    public function index(Request $request)
    {
        if($request->isMethod("post")){

        }
        //return redirect('/admin/login');
        return view('admin.login');
    }
}
