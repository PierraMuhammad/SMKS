<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    //
    public function checkUser(){
        $auth = Auth::user();
        if($auth['role'] != 'user'){
            return redirect('admin/home');
        }
        return $auth;
    }

    public function userMonitoring(){
        $auth = $this->checkUser();
        return view('user-page.monitoring', compact('auth'));
    }

    public function userManajemen(){
        $auth = $this->checkUser();
        return view('user-page.manajemen', compact('auth'));
    }
}
