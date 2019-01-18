<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AccountController extends Controller
{
    public function index()
    {
        //return view("administrator.login");
    }    
    
    public function login(Request $request)
    {
        $data = [
            "email" => $request->input("username"),
            "password" => $request->input("password"),
        ];
        if(Auth::attempt($data)){
            $request->session()->flash('success', 'Login successfully');
            return redirect()->route("dash");
        }else{
            $message = "Invalid login credentials" ;
            return redirect()->back()->with("error", $message);
            ;
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return view("admin.login");
    }
}
