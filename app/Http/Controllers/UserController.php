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
        $user =$this->model->all();
        return view('admin.user.index')->with('user' ,$user);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cinema = Cinema::orderBy('cinema_name', 'asc')->get();
        return view('admin.user.create')->with(
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
        ]);

            
        $user = $this->model->all();
        if(User::where("email", $request->input("email"))->exists()){
            return redirect()->back()->with("error", "The E-Mail is in Use By Another User");
        }

        $data = [
            'user' => new User,
            "email" => $request->input('email'),
            "name" => $request->input("name"),
            "password" => Hash::make($request->input('password')),
        ];
  
        if($this->model->create($data)){
           return redirect()->route("user.index")->with("success", "You Have Added The Staff Successfully");
        }   
             
    }

    public function destroy($id)
    {
        $user =  $this->model->show($id);
        if($this->model->delete($id)){
            return redirect()->back()->with("success", "You Have Deleted The Showtime Successfully"); 
        }
    }

    public function edit($id)
    {
         $user = $this->model->show($id);
        return view('admin.user.edit')->with(
            [
                "user" =>$user,
            ]
        );
    }

     public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' =>'required|min:5|max:255',
            'name' => 'required|min:1|max:255',
            'password' => 'required|min:1|max:10',
  
        ]);

            
         $data = [
            'user' => new User,
            "email" => $request->input('email'),
            "name" => $request->input("name"),
            "password" => Hash::make($request->input('password')),
        ];
        if($this->model->update($data, $id)){
            return redirect()->route("user.index")->with("success", "You Have Updated The Staff Details Successfully");
        }  
             
    }
}
