<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Repositories\Repository;
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
        $user= User::orderBy('email', 'asc')->paginate(10);
        return view('administrator.user.index')->with('user', $user);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.user.create');
    }

    public function customerOrders($userid)
    {
        $data = [
            "details" => User::where("id", $userid)->first(),
            "orders" => Order::where("user_id", $userid)->simplePaginate(20)
        ];
        return view("administrator.customers.orders")->with($data);
    }
}
