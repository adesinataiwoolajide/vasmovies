<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index')->name('website.home');
Route::get('/movielist', 'HomeController@movielist')->name('movie.list');
Route::get('/moviedetails/{id}', 'HomeController@moviedetails')->name('movie.details');
//Route::get('/moviedetails/{id}', 'HomeController@moviedetailshow')->name('movie.showing');
Route::get('/cinema-movies/{id}', 'HomeController@cinemaMovies')->name('movie.cinema');
Route::get('/moviedays/{show_day}', 'HomeController@moviedays')->name('movie.day');

Route::get("/admin", function(){
    return view("admin.login");
});

//grouping the administrator routes
Route::group(["prefix" => "admin"], function(){
    //Showing the admin login form
    //Route::get("/admin", "AccountController@index")->name("administrator.index");

    //Processing and Authenticationg the login     
    Route::post("/login", "AccountController@login")->name("admin.login");

    //Logout the administrator
    Route::get("/logout", "AccountController@logout")->name("admin.logout");
    
    //displaying the administrator dashboard
    Route::get("/dashboard", "AdministratorController@show")->name("dash");  


    Route::group(["prefix" => "cinema"], function(){
        //Showing the List of Cinema
        Route::get("/create", "CinemaController@index")->name("cinema.index");

        //Adding The Cnema
        Route::post("/save", "CinemaController@store")->name("cinema.save");

        Route::get("/edit/{id}", "CinemaController@edit")->name("cinema.edit");

        Route::post("/update/{id}", "CinemaController@update")->name("cinema.update");

        //Deleting From the List of Cinema
        Route::get("/delete/{cinema_id}", "CinemaController@destroy")->name("cinema.delete");
    });



    Route::group(["prefix" => "user"], function(){
        //Showing the List of Users
        Route::get("/", "UserController@show")->name("user.index");

        //Showing Form To Add New User
        Route::get("/create", "UserController@create")->name("user.create");

         //Adding The User
        Route::post("/save", "UserController@store")->name("user.save");

        Route::get("/show/{id}", "UserController@show")->name("user.show");

        Route::get("/edit/{id}", "UserController@edit")->name("user.edit");

        Route::get("delete/{id}", "UserController@destroy")->name("user.delete");

        Route::post("/update/{id}", "UserController@update")->name("user.update");
        
    });


    Route::group(["prefix" => "movie"], function(){
        //Showing the List of Users
        Route::get("/", "MovieController@index")->name("movie.index");

        //Showing Form To Add New User
        Route::get("/create", "MovieController@create")->name("movie.create");

         //Adding The User
        Route::post("/save", "MovieController@store")->name("movie.save");
        
        Route::get("/show/{id}", "MovieController@show")->name("movie.show");

        //
        Route::get("/gallery", "MovieController@movieGallery")->name("movie.gallery");

        Route::get("/edit/{id}", "MovieController@edit")->name("movie.edit");
        Route::get("delete/{id}", "MovieController@destroy")->name("movie.delete");

        Route::post("/update/{id}", "MovieController@update")->name("movie.update");
        
    });

     Route::group(["prefix" => "showtimes"], function(){
        //Showing the List of Users
        Route::get("/", "ShowtimeController@index")->name("showtime.index");

        //Showing Form To Add New User
        Route::get("/create", "ShowtimeController@create")->name("showtime.create");

         //Adding The User
        Route::post("/save", "ShowtimeController@store")->name("showtime.save");

        Route::get("delete/{id}", "ShowtimeController@destroy")->name("showtime.delete");

        Route::get("/edit/{id}", "ShowtimeController@edit")->name("showtime.edit");

        Route::post("/update/{id}", "ShowtimeController@update")->name("showtime.update");

        Route::get("/movieshow", "ShowtimeController@show")->name("showtime.cinema");

        
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
