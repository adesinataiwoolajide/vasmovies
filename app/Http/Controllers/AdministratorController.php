<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AdministratorController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function show()
    {
        $data = [
            
        ];
        return view("administrator.home")->with($data);
    }

    public function password()
    {
        return view("administrator.settings.password");
    }

    public function updatePassword(Request $request)
    {
        $validate = $request->validate([
            "password" => 'required|confirmed'
        ]);

        User::where("id", Auth::id())->update([
            "password" => Hash::make($request->password)
        ]);
        return redirect()->back()->with("success", "Password changed");
    }
}
