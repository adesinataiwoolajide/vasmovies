@extends("partials.header")
    @section("content")
        <ul class="breadcrumb">
            <li><a href="{{ route("dash") }}">Home</a></li>  
            <li><a href="{{ route("cinema.index") }}">Cinema</a></li>                    
            <li class="active"></li>
        </ul>
        <!-- END BREADCRUMB -->                       
       
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route("cinema.update", $cinema->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Updating The</strong> Cinema House</h3>
                            </div>
                            <div class="panel-body">
                                <h3><p style="color: green" align="center">Please fill the below form to add a new cinema</p></h3>
                            </div>
                            @include('partials.message')
                            <div class="panel-body form-group-separated">    
                                <div class="form-group">
                                    <label class="col-md-1 col-xs-5 control-label">CINEMA NAME</label>
                                    <div class="col-md-4 col-xs-5">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-sitemap"></span></span>
                                            <input type="text" class="form-control" name="cinema_name" placeholder="Please Enter The Type Name" required minlength="2" value="{{ $cinema->cinema_name }}" />
                                        </div>    
                                        @if ($errors->has('cinema_name'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('cinema_name') }}
                                            </div>
                                        @endif                                          
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div>
                                    <label class="col-md-1 col-xs-5 control-label">CINEMA LOCATION</label>
                                    <div class="col-md-4 col-xs-5">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
                                            <select class="form-control " name="cinema_location" required>
                                                <option value="{{ $cinema->location }}">{{ $cinema->cinema_location }}
                                                </option>
                                                <option value=""></option>
                                                <option value="Apapa">Apapa</option>
                                                <option value="Ikeja">Ikeja</option>
                                                <option value="Lekki">Lekki</option>
                                            </select>
                                        </div>  
                                        @if ($errors->has('cinema_location'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('cinema_location') }}
                                            </div>
                                        @endif                                                 
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div>  
                                    <input type="hidden" name="id" value="{{ $cinema->id }}">
                                    <div class="col-md-2 col-xs-2">                                            
                                        <div class="input-group">
                                            <button class="btn btn-success pull-right">UPDATE THE CINEMA</button>
                                        </div>                                                 
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div>  
                                </div>
                            </div>
                           
                        </div>
                    </form>                         
                </div>
                
                
            </div>
        </div>                             
    </div>            
</div>
@endsection