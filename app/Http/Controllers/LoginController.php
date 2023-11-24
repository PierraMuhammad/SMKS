<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('home_landing');
    }

    public function authenticate(Request $request){
        // dd($request->all());
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $auth = Auth::user();
            $request->session()->regenerate();
            if($auth['role'] == 'admin'){
                return redirect('/admin/home');
            }
            return redirect('/user/monitoring');
        }

        return back()->with('loginError', 'Login failed');
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function store()
    {
        // $validatedData = $request->validate([
        //     'name' => ['required', 'max:255'],
        //     'email' => ['required', 'email:dns', 'unique:users'],
        //     'password' => ['required']
        // ]);

        $validatedData['name'] = 'Gag';
        $validatedData['email'] = 'gag.SMKS@gmail.com';
        $validatedData['password'] = '12345';
        $validatedData['tlp'] = '(555) 321-0987';
        $validatedData['role'] = 'user';

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/')->with('success', 'Registration is success. Please login.');
    }
}
