<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect('/');
        }else{
            return redirect()->back()->withError('invalid credentials');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
