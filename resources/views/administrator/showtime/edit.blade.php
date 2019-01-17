@extends("partials.header")
    @section("content")
        <ul class="breadcrumb">
            <li><a href="{{ route("dash") }}">Home</a></li>  
            <li><a href="{{ route("showtime.create") }}">Add Movies</a></li>  
            <li><a href="{{ route("showtime.index") }}">List of Showtimes</a></li>                
            <li class="active"></li>
        </ul>
        <!-- END BREADCRUMB -->                       
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route("showtime.update", $showtime->id) }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Add A </strong> New Movie Show Times</h3>
                            </div>
                            
                            <div class="panel-body">
                                <h3><p style="color: green" align="center">Please fill the below form to add a new Movie Showtime</p></h3>
                            </div>
                            @include('partials.message')
                            <div class="panel-body form-group-separated">    
                                <div class="form-group col-md-12">
                                    <label class="col-md-1 col-xs-6 control-label">MOVIE TITLE</label>
                                    <div class="col-md-5 col-xs-6">                                             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-cog"></span></span>
                                            <select class="form-control " name="movie_id" required>
                                                <option value="{{ $showtime->movie_id }}">{{ $showtime->movie_id }}
                                                </option>
                                                <option value=""></option>
                                                @foreach($movie as $movies)
                                                    <option value="{{ $movies->id }}">{{ $movies->movie_title }}</option>
                                                @endforeach
                                            </select>
                                        </div>  
                                        @if ($errors->has('movie_id'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('movie_id') }}
                                            </div>
                                        @endif                                                 
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div>  
                                    <label class="col-md-1 col-xs-6 control-label">CINEMA LOCATION</label>
                                    <div class="col-md-5 col-xs-6">                                             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-calender"></span></span>
                                            <select class="form-control " name="cinema_id" required>
                                                <option value="{{ $showtime->cinema_id }}">{{ $showtime->cinema_id }}
                                                </option>
                                                <option value=""></option>
                                                @foreach($cinema as $cinemas)
                                                    <option value="{{ $cinemas->id }}">{{ $cinemas->cinema_name }}</option>
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
                                     
                                    <label class="col-md-1 col-xs-6 control-label">SHOWING DATE</label>
                                    <div class="col-md-5 col-xs-6">                                             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                            <input type="date" name="showing_date" required="" value="{{ $showtime->showing_date }}" class="form-control" placeholder="Enter The Date">
                                        </div>                                                 
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div> 

                                    <label class="col-md-1 col-xs-6 control-label">SHOWING TIME</label>
                                    <div class="col-md-5 col-xs-6">                                             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-bell"></span></span>
                                            <input type="text" name="showing_time" required="" class="form-control" value="{{ $showtime->showing_time }}" placeholder="Enter The Showing Time e.g 4: 00 PM CAT">
                                        </div>                                                 
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div> 
                                </div>
                            </div>

                            <input type="hidden" name="id" value="{{ $showtime->id }}">
                            <div class="panel-footer col-md-12">                                 
                                <button class="btn btn-success pull-right">UPDATE THE MOVIE SHOW TIME</button>
                            </div>
                           
                        </div>
                    </form>                         
                </div>
               
            </div>
        </div>                             
    </div>            
</div>
@endsection