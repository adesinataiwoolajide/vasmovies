@extends("partials.header")
    @section("content")
        <ul class="breadcrumb">
            <li><a href="{{ route("dash") }}">Home</a></li>  
            <li><a href="{{ route("movie.create") }}">Add Movies</a></li>  
            <li><a href="{{ route("movie.index") }}">List of Movies</a></li>                
            <li class="active"></li>
        </ul>
        <!-- END BREADCRUMB -->                       
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route("movie.update", $movie->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Update The </strong> Movie Details</h3>
                            </div>
                            
                            <div class="panel-body">
                                <h3><p style="color: green" align="center">Please fill the below form to update the Movie details</p></h3>
                            </div>
                            @include('partials.message')
                            
                                <div class="panel-body form-group-separated">    
                                    <div class="form-group col-md-12">
                                        <label class="col-md-1 col-xs-6 control-label">CHANGE MOVIES BANNER</label>
                                        <div class="col-md-5 col-xs-6">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input type="file" class="form-control" name="movie_banner" placeholder="Please Enter The Name"minlength="1" required />
                                            </div>      
                                            @if ($errors->has('movie_banner'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('movie_banner') }}
                                                </div>
                                            @endif                                        
                                            <span class="help-block" style="color: green;">This is field is Optional.</span>
                                        </div>
                                        <label class="col-md-1 col-xs-6 control-label">MOVIES NAME</label>
                                        <div class="col-md-5 col-xs-6">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input type="text" class="form-control" name="movie_title" value="{{ $movie->movie_title}}" placeholder="Please Enter The Name" required minlength="2" />
                                            </div>    
                                            @if ($errors->has('movie_title'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('movie_title') }}
                                                </div>
                                            @endif                                          
                                            <span class="help-block" style="color: red;">This is field is Required.</span>
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="panel-body form-group-separated">  
                                    <div class="form-group col-md-12">  
                                            <label class="col-md-1 col-xs-6 control-label">MOVIE CATEGORY</label>
                                            <div class="col-md-5 col-xs-6">                                             
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
                                                    <select class="form-control " name="movie_category" required>
                                                        <option value="{{$movie->movie_category}}">{{$movie->movie_category}}</option>
                                                        <option value=""></option>
                                                        <option value="Action"> Action </option>
                                                        <option value="Comedy"> Comedy </option>
                                                        <option value="Indegenous"> Indegenous </option>
                                                        <option value="Religious"> Religious </option>
                                                    </select>
                                                </div>           
                                                @if ($errors->has('movie_category'))
                                                    <div class="alert alert-danger">
                                                        {{ $errors->first('movie_category') }}
                                                    </div>
                                                @endif                                        
                                                <span class="help-block" style="color: red;">This is field is Required.</span>
                                            </div>  
                                        <label class="col-md-1 col-xs-6 control-label">CINEMA LOCATION</label>
                                        <div class="col-md-5 col-xs-6">                                             
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
                                                <select class="form-control " name="cinema_id" required>
                                                    @foreach(cinemaDetais($movie->cinema_id) as $loc)
                                                        <option value="{{$movie->cinema_id}}">
                                                            {{$loc->cinema_name . " ".$loc->cinema_location}}
                                                        </option>
                                                    @endforeach 
                                                    
                                                    <option value=""></option>
                                                    @foreach($cinema as $cinemas)
                                                        <option value="{{ $cinemas->id }}">{{ $cinemas->cinema_name . " ".$cinemas->cinema_location }}</option>
                                                    @endforeach
                                                </select>
                                            </div>   
                                            @if ($errors->has('cinema_id'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('cinema_id') }}
                                                </div>
                                            @endif                                                
                                            <span class="help-block" style="color: red;">This is field is Required.</span>
                                        </div> 
                                    </div>
                                </div>

                                <div class="panel-body form-group-separated">  
                                    <div class="form-group col-md-12">  
                                        
                                        <label class="col-md-1 col-xs-6 control-label">DESCRIPTION</label>
                                        <div class="col-md-5 col-xs-6">                                             
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-sitemap"></span></span>
                                                <textarea name="description" required class="form-control" placeholder="Enter The Film Description">{{$movie->description}}</textarea>
                                            </div>                                                 
                                            <span class="help-block" style="color: red;">This is field is Required.</span>
                                            @if ($errors->has('description'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('description') }}
                                                </div>
                                            @endif  
                                        </div> 

                                        <label class="col-md-1 col-xs-6 control-label">TOP ACTORS</label>
                                        <div class="col-md-5 col-xs-6">                                             
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-users"></span></span>
                                                <textarea name="top_actors" required class="form-control" placeholder="Enter The Top Actors Seperating Them with Coma">{{$movie->top_actors}}</textarea>
                                            </div>     
                                            @if ($errors->has('top_actors'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('top_actors') }}
                                                </div>
                                            @endif                                              
                                            <span class="help-block" style="color: red;">This is field is Required.</span>
                                        </div> 
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{ $movie->id }}">
                                <div class="panel-footer col-md-12">                                 
                                    <button class="btn btn-success pull-right">UPDATE THE MOVIE DETAILS</button>
                                </div>
                            
                           
                        </div>
                    </form>                         
                </div>
               
            </div>
        </div>                             
    </div>            
</div>
@endsection