<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cinema;
use App\Repositories\Repository;
use DB;
class CinemaController extends Controller
{
    // space that we can use the repository from
    protected $model;

    public function __construct(Cinema $cinema)
    {
       // set the model
       $this->model = new Repository($cinema);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cinema= $this->model->all();
       // $cinema= Cinema::orderBy('cinema_name', 'asc')->paginate(10);
        return view('administrator.cinema.create')->with('cinema', $cinema);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.cinema.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cinema = new Cinema($request->all());
        //Cheking if The Cinema Already Exist
        if(Cinema::where("cinema_name", $request->input("cinema_name"))->exists()){
            //$request->session()->flash('error', 'You Have Added The Cinema To The List Before');
            return redirect()->back()->with("error", "You Have Added The Cinema To The List Before");
        }

        //Checking if The details were saved
        if($cinema->save()){
            $request->session()->flash('success', 'You Have Added The Cinema Successfully');
            //redirect back to the cinema page
            return redirect()->back()->with("cinema");
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Finding the selected Id
        $cinema =  $this->model->show($id);  
        
        //deleting the selected Id
        if($cinema->delete($id)){
            //redirect back to the cinema page
            return redirect()->back()->with("success", "You Have Deleted The Cinema Successfully");
        }
        
    }
}
