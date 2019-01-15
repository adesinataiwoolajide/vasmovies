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

//grouping the administrator routes
Route::group(["prefix" => "admininistrator"], function () {
    //Showing the admin login form
    Route::get("/", "AccountController@index")->name("admininistrator.index");

    //Processing and Authenticationg the login     
    Route::post("/login", "AccountController@login")->name("admininistrator.login");

    //Logout the administrator
    Route::get("/logout", "AccountController@logout")->name("admininistrator.logout");
    
    //displaying the administrator dashboard
    Route::get("/dashboard", "AdministratorController@show")->name("dash");  


    Route::group(["prefix" => "cinema"], function(){
        //Showing the List of Cinema
        Route::get("/create", "CinemaController@index")->name("cinema.index");

        //Adding The Cnema
        Route::post("/create", "CinemaController@store")->name("cinema.save");

        //Deleting From the List of Cinema
        Route::get("/delete/{cinema_id}", "CinemaController@destroy")->name("cinema.delete");
    });

    Route::group(["prefix" => "user"], function(){
        //Showing the List of Users
        Route::get("/", "UserController@show")->name("user.index");

        //Showing Form To Add New User
        Route::get("/create", "UserController@create")->name("user.create");
        

    });
});

