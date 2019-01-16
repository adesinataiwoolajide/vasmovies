<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Showtime, Movie, Cinema};
use App\Repositories\Repository;
use DB;
class ShowtimeController extends Controller
{
     // space that we can use the repository from
    protected $model;

    public function __construct(Showtime $showtime)
    {
       // set the model
       $this->model = new Repository($showtime);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cinema = Movie::with('moviescinema')->get();
        //$cinema->Cinema()->where('cinema_id','id',$user->age)->get();
        //$movie= $this->model->all();
        $showtime= $this->model->all();
        return view('administrator.showtime.index')->with(
            [
               // "cinema" =>$cinema,
                "showtime" => $showtime,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cinema = Cinema::orderBy('cinema_name', 'asc')->get();
        $movie = Movie::orderBy('movie_title', 'asc')->get();
        return view('administrator.showtime.create')->with(
            [
                "cinema" =>$cinema,
                "movie" =>$movie,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'movie_id' =>'required|min:1',
            'cinema_id' =>'required|min:1|max:255',
            'showing_date' => 'required|min:1|max:50',
            'showing_time' => 'required|min:1|max:50',
        ]);

        $showtime = new Showtime;
        $showtime->movie_id = $request->input('movie_id');
        $showtime->cinema_id = $request->input('cinema_id');
        $showtime->showing_date = $request->input('showing_date');
        $showtime->showing_time = $request->input('showing_time');

        if($this->model->create($request->only($this->model->getModel()->fillable))){
            return redirect()->route("showtime.index")->with("success", "You Have Added The Movie Showtime Successfully");
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
        $showtime =  $this->model->show($id);
        if($this->model->delete($id)){
            return redirect()->back()->with("success", "You Have Deleted The Showtime Successfully"); 
        }
    }
}
