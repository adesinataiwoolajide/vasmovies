<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User, Showtime, Movie, Cinema};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AdministratorController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

     protected $model;


    public function show()
    {
       $data = [
            "user" => User::all(),
            "showtime" => Showtime::all(),
            "movie" => Movie::all(),
            "cinema" => Cinema::all(),
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
