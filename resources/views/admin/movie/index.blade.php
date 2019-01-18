@extends("partials.header")
    @section("content")
        <ul class="breadcrumb">
            <li><a href="{{ route("dash") }}">Home</a></li>  
            <li><a href="{{ route("movie.index") }}">List of Movies</a></li>  
             <li><a href="{{ route("movie.create") }}">Add Movie</a></li>                 
            <li class="active"></li>
        </ul>
        <!-- END BREADCRUMB -->                       
        @include('partials.message')
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        @if(count($movie) > 0)
                            <div class="row">
                                @foreach($movie as $movies)
                                    <div class="col-md-3">
                                        <!-- CONTACT ITEM -->
                                        <div class="panel panel-default">
                                            <div class="panel-body profile">
                                                <div class="profile-image">
                                                    
                                                    <img src="{{asset('movie_banner/'.$movies->movie_banner)}}" style="width:100px; height: 100px;" align="center">

                                                 </div>
                                                <div class="profile-data">
                                                    <div class="profile-data-name">{{ $movies->movie_title }}</div>
                                                    <div class="profile-data-title">{{ $movies->movie_category }}</div>
                                                    <a href="{{ route("movie.delete", $movies->id) }}" class="profile-control-left"><span class="fa fa-trash-o"></i>Delete</a>
                                                </div>
                                                <div class="profile-controls">
                                                    <a href="{{ route("movie.edit", $movies->id) }}" class="profile-control-left"><span class="fa fa-pencil"></span></a>

                                                    <a href="{{ route("movie.show", $movies->id) }}" class="profile-control-right"><span class="fa fa-cogs"></span></a>
                                                </div>
                                            </div>                                
                                            <div class="panel-body">                                    
                                                <div class="contact-info">

                                                    @foreach(cinemaDetais($movies->cinema_id) as $loc)
                                                        <p align="center"><small>Cinema Location: {{$loc->cinema_name . " ".$loc->cinema_location}}</small></p>
                                                    @endforeach   
                                                                       
                                                </div>
                                            </div>   
                                                                      
                                        </div>
                                        <!-- END CONTACT ITEM -->
                                    </div>
                                @endforeach
                            </div>
                        @else
                             <div class="col-md-12">
                                <div class="panel panel-default">
                                    <h4><p style="color: red" align="center">The Movie List is Empty </p></h4>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>                             
    </div>            
</div>
@endsection