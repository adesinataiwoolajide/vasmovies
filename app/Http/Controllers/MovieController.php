<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{Movie, Cinema};
use App\Repositories\Repository;
use DB;
class MovieController extends Controller
{

    // space that we can use the repository from
    protected $model;

    public function __construct(Movie $movie)
    {
       // set the model
       $this->model = new Repository($movie);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cinema = Movie::with('moviescinema')->get();


        ///Cinema::with('movies')->where('id','cinema_id')->get();


        //return Movie::find('id')->cinemas()->where('id', 'cinema_id')->first();
        $cinema= Movie::with('cinemas')->get();
        $movie= $this->model->all();
        return view('administrator.movie.index')->with(
            [
                "cinema" =>$cinema,
                "movie" => $movie,
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
        return view('administrator.movie.create')->with(
            [
                "cinema" =>$cinema,
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
            'movie_title' =>'required|min:5|max:255|unique:movies',
            'movie_category' =>'required|min:2|max:255',
            'movie_banner' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:1999',
            'cinema_id' => 'required|min:1|max:50',
            'top_actors' => 'required|min:2',
            'description' => 'required|min:5',

        ]);

        if($request->hasFile('movie_banner')){
            //Getting File Name With Extension
            $filenameWithExt = $request->file('movie_banner')->getClientOriginalName();
            // Get Just File Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('movie_banner')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path=$request->file('movie_banner')->storeAs('public/movie-banner', $fileNameToStore);
        }else{
            $fileNameToStore = 'no-image.png';
        }
        $movie = new Movie;
        $movie->movie_title = $request->input('movie_title');
        $movie->movie_category = $request->input('movie_category');
        $movie->movie_banner = $request->input('movie_banner').time().'.'.$extension;;
        $movie->cinema_id = $request->input('cinema_id');
        $movie->top_actors = $request->input('top_actors');


        if($this->model->create($request->only($this->model->getModel()->fillable))){
            return redirect()->route("movie.index")->with("success", "You Have Added The Movie Successfully");
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function movieGallery()
    {
        $movie= $this->model->all();
        return view('administrator.movie.gallery')->with('movie', $movie);
    }
    public function show($id)
    {
         $movie = $this->model->show($id);
        return view('administrator.movie.show')->with(
            [
               // "cinema" => $cinema,
                "movie" => $movie,

            ]
        ); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cinema = Cinema::orderBy('cinema_name', 'asc')->get();
        $movie = $this->model->show($id);
        return view('administrator.movie.edit')->with(
            [
                "cinema" => $cinema,
                "movie" => $movie,

            ]
        ); 
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
        $this->validate($request, [
            'movie_title' =>'required|min:5|max:255',
            'movie_category' =>'required|min:2|max:255',
            'movie_banner' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:1999',
            'cinema_id' => 'required|min:1|max:50',
            'top_actors' => 'required|min:2',
            'description' => 'required|min:5',
        ]);

        if($request->hasFile('movie_banner')){
            $filenameWithExt = $request->file('movie_banner')->getClientOriginalName();
            // Get Just File Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('movie_banner')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path=$request->file('movie_banner')->storeAs('public/movie-banner', $fileNameToStore);
        }

        $movie = $this->model->show($id);
        $movie->movie_title = $request->input('movie_title');
        $movie->movie_category = $request->input('movie_category');
        $movie->cinema_id = $request->input('cinema_id');
        $movie->top_actors = $request->input('top_actors');
       
        if($request->hasFile('movie_banner')){
            $movie->movie_banner = $fileNameToStore;
        }

        if($this->model->update($request->only($this->model->getModel()->fillable), $id)){
            return redirect()->route("movie.index")->with("success", "You Have Updated The Movie Details Successfully");
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie =  $this->model->show($id);
        if($this->model->delete($id)){
            return redirect()->back()->with("success", "You Have Deleted The Movie Successfully"); 
        }
    }
}
