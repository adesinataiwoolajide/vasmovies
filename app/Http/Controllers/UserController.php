<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User, Cinema};
use App\Repositories\Repository;
use DB;
use Validator;

use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{

    // space that we can use the repository from
    protected $model;

    public function __construct(User $user)
    {
       // set the model
       $this->model = new Repository($user);
    }
    
    public function show()
    {
        $user = User::with('cinemas')->get();
        $user =$this->model->all();
        return view('administrator.user.index')->with('user' ,$user);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cinema = Cinema::orderBy('cinema_name', 'asc')->get();
        return view('administrator.user.create')->with(
            [
                "cinema" =>$cinema,
            ]
        );
    }

     public function store(Request $request)
    {
        $this->validate($request, [
            'email' =>'required|min:5|max:255|unique:users',
            'name' => 'required|min:1|max:255',
            'password' => 'required|min:1|max:10',
            'cinema_id' => 'required|min:1|max:50',
            'is_admin' => 'required|min:1|max:10',
        ]);

            
        $user = $this->model->all();
        if(User::where("email", $request->input("email"))->exists()){
            return redirect()->back()->with("error", "The E-Mail is in Use By Another User");
        }

        $user->email = $request->input('email');
        $user->name = $request->input('name');
        $user->password = Hash::make($request->newPassword);
        $user->cinema_id = $request->input('cinema_id');
        $user->is_admin = $request->input('is_admin');
        if($this->model->create($request->only($this->model->getModel()->fillable))){
           return redirect()->route("user.index")->with("success", "You Have Added The Staff Successfully");
        }   
             
    }

}
