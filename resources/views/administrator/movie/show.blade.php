@extends("partials.header")
    @section("content")
        <ul class="breadcrumb">
            <li><a href="{{ route("dash") }}">Home</a></li>  
            
            <li><a href="{{ route("movie.edit", $movie->id) }}">Edit Movie Details</a></li>  
            <li><a href="{{ route("movie.index") }}">List of Movies</a></li>  
            <li><a href="{{ route("movie.create") }}">Add Movie</a></li>  
            <li><a href="{{ route("movie.gallery") }}"> Movies Gallery</a></li>                   
            <li class="active"></li>
        </ul>
        <!-- END BREADCRUMB -->                       
        @include('partials.message')
        <div class="page-content-wrap">
            <div class="row">

                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body profile" style="background: url('') center center no-repeat;">
                            <div class="profile-image">
                                <img src="" />
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name" style="color: black">
                                    {{$movie->movie_title}}
                                </div>
                                <div class="profile-data-title" style="color: black;">
                                    {{$movie->movie_category}}
                                </div>
                            </div>                                 
                        </div>                                
                        <div class="panel-body">                                    
                            <div class="row" align="center">
                                Movie Image
                            </div>
                        </div>
                        <div class="panel-body list-group border-bottom" align="center">
                            <a href="" class="list-group-item active"><span class="fa fa-image"></span> Product Thumbnail Image
                            </a>
                            
                        </div>
                        
                    </div>                            
                    
                </div>
 

                <div class="col-md-9"> 
                    <div class="panel panel-default">
                        <table id="customers2" class="table datatable">
                                                                
                            <div class="panel-body">
                                <table class="table table-responsive">
                                    
                                    <tbody>
                                        <tr>
                                            <td>Movie Name</td>
                                            <td>{{$movie->movie_title}}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>Movie Category</td>
                                            <td>{{$movie->movie_category}}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>Cinema House</td>
                                            <td>{{$movie->cinema_id}}</td>
                                        </tr>
                                    </tbody>
                                     <tbody>
                                        <tr>
                                            <td>Top Actors</td>
                                            <td>{{$movie->top_actors}}</td>
                                        </tr>
                                    </tbody>
                                     <tbody>
                                        <tr>
                                            <td>Description</td>
                                            <td>{{$movie->descriptiuon}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            
                            <div class="panel-footer col-md-12">                                 
                                <a href="{{ route("movie.edit", $movie->id) }}" class="btn btn-success pull-right">EDIT MOVIE DETAILS</a>
                            </div></div>
                        </div>
                    </div>
                </div>
            </div>                             
        </div>            
 
@endsection