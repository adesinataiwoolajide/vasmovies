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
        $cinema= Movie::with('cinemas')->get();
        $movie= $this->model->all();
        return view('admin.movie.index')->with(
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
        return view('admin.movie.create')->with(
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
            'movie_banner' => 'nullable|mimes:jpeg,bmp,png,PNG,jpg,JPEG|max:1999',
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
            $path=$request->file('movie_banner')->move('movie_banner', $fileNameToStore);
        }else{
            $fileNameToStore = 'no-image.png';
        }
       // $movie = new Movie;

        if(Movie::where("movie_title", $request->input("movie_title"))->exists()){
            return redirect()->back()->with("error", "You Have Added The Film Before");
        }

        $data = [
            'movie' => new Movie,
            "movie_title" => $request->input('movie_title'),
            "movie_category" => $request->input("movie_category"),
            "cinema_id" => $request->input('cinema_id'),
            "top_actors" => $request->input('top_actors'),
            "movie_banner" => $fileNameToStore,
            "description" => $request->input("description")
        ];

        if($this->model->create($data)){
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
        return view('admin.movie.gallery')->with('movie', $movie);
    }
    public function show($id)
    {
         $movie = $this->model->show($id);
        return view('admin.movie.show')->with(
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
        return view('admin.movie.edit')->with(
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
            'movie_banner' => 'required|mimes:jpeg,bmp,png,PNG,jpg,JPEG|max:1999',
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
            $path=$request->file('movie_banner')->move('movie_banner', $fileNameToStore);
        }else{
            $fileNameToStore = $fileNameToStore;
        }
        $movie = new Movie;
       
        $data = [
            
            "movie_title" => $request->input('movie_title'),
            "movie_category" => $request->input("movie_category"),
            "cinema_id" => $request->input('cinema_id'),
            "top_actors" => $request->input('top_actors'),
            "movie_banner" => $fileNameToStore,
            "description" => $request->input("description")
        ];

        if($this->model->update($data, $id)){
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
