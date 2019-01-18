<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{Movie, Cinema, Showtime};
use App\Repositories\Repository;
use DB;
class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
           "movie" => Movie::all(),
           "cinema" => Cinema::all(),
           "showtimes" => Showtime::all(),
        ];
        return view("website.index")->with($data);
    }
     public function movielist()
    {
        $data = [
           "movie" => Movie::all(),
           "cinema" => Cinema::all(),
           "showtimes" => Showtime::all(),
        ];
        return view("website.movielist")->with($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cinemaMovies($cinema_id)
    {
        $cinemalist = DB::table('movies')->where([
            "cinema_id" => $cinema_id,
        ])->get(); 
        return view('website.cinema_movies')->with(
            [
                "cinema" => Cinema::all(),
                "movie" => Movie::all(),
                "cinemalist" => $cinemalist,
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
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function moviedetails($id)
    {
         $showtimes  = DB::table('movies')->where([
            "id" => $id,
        ])->get(); 
          
        $data =[
           
            "movie" => Movie::all(),
            "cinema" => Cinema::all(),
            "showtime" => Showtime::all(),
            "showtimes" => $showtimes,
        ];
        return view("website.movie-details")->with($data);
    }
    public function moviedetailshow($id, $cinema_id)
    {
         $show = DB::table('movies')->where([
            "id" => $id,
            "cinema_id" => $cinema_id,
        ])->get(); 
          
        $data =[
           
            "movie" => Movie::all(),
            "cinema" => Cinema::all(),
            "showtime" => Showtime::all(),
            "show" => $show,
        ];
        return view("website.movie-details")->with($data);
    }
    public function moviedays($days)
    {
         $moviedays  = DB::table('show_times')->where([
            "show_day" => $days,
        ])->get(); 
        $data =[
           
            "movie" => Movie::all(),
            "cinema" => Cinema::all(),
            "showtime" => Showtime::all(),
            "moviedays" => $moviedays,
        ];
        return view("website.movie-days")->with($data);
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
        //
    }
}