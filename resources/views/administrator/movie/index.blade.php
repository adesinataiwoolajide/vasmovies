@extends("partials.header")
    @section("content")
        <ul class="breadcrumb">
            <li><a href="{{ route("dash") }}">Home</a></li>  
            <li><a href="{{ route("movie.index") }}">List of Movies</a></li>  
             <li><a href="{{ route("movie.create") }}">Add Movie</a></li>  
             <li><a href="{{ route("movie.gallery") }}"> Movies Gallery</a></li>                   
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
                                                    <img src="public/movie-banner/{{ $movies->movie_banner }}" style="width:100px; height: 100px;" align="center">
                                                </div>
                                                <div class="profile-data">
                                                    <div class="profile-data-name">{{ $movies->movie_title }}</div>
                                                    <div class="profile-data-title">{{ $movies->movie_category }}</div>
                                                </div>
                                                <div class="profile-controls">
                                                    <a href="{{ route("movie.edit", $movies->id) }}" class="profile-control-left"><span class="fa fa-pencil"></span></a>
                                                    <a href="" class="profile-control-right"><span class="fa fa-cogs"></span></a>
                                                </div>
                                            </div>                                
                                            <div class="panel-body">                                    
                                                <div class="contact-info">
                                                    <p><small>Cinema Location</small><br/>{{ $movies->cinema_id }}</p>
                                                    <p><small>Email</small><br/>nadiaali@domain.com</p>
                                                    <p><small>Address</small><br/>123 45 Street San Francisco, CA, USA</p>                                   
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