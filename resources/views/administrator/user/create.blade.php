@extends("partials.header")
    @section("content")
        <ul class="breadcrumb">
            <li><a href="{{ route("dash") }}">Home</a></li>  
            <li><a href="{{ route("user.create") }}">Add User</a></li>  
            <li><a href="{{ route("user.index") }}">List of Users</a></li>                
            <li class="active"></li>
        </ul>
        <!-- END BREADCRUMB -->                       
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route("user.save") }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Add A </strong> New Staff</h3>
                            </div>
                            
                            <div class="panel-body">
                                <h3><p style="color: green" align="center">Please fill the below form to add a new stafs</p></h3>
                            </div>
                            @include('partials.message')
                            <div class="panel-body form-group-separated">    
                                <div class="form-group col-md-12">
                                    <label class="col-md-1 col-xs-6 control-label">FULL NAME</label>
                                    <div class="col-md-5 col-xs-6">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                            <input type="text" class="form-control" name="name" placeholder="Please Enter The Name" required minlength="2" />
                                        </div>                                            
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div>

                                    <label class="col-md-1 col-xs-6 control-label">E-MAIL</label>
                                    <div class="col-md-5 col-xs-6">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                            <input type="text" class="form-control" name="email" placeholder="Please Enter The E-Mail" required minlength="2" />
                                        </div>                                            
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="panel-body form-group-separated">  
                                <div class="form-group col-md-12">  
                                    <label class="col-md-1 col-xs-4 control-label">PASSWORD</label>
                                    <div class="col-md-3 col-xs-4">                                             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                                            <input type="password" class="form-control" name="password" placeholder="Please Enter The Password" required minlength="2" />
                                        </div>                                                 
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div> 
                                    <label class="col-md-1 col-xs-4 control-label">CINEMA LOCATION</label>
                                    <div class="col-md-3 col-xs-4">                                             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
                                            <select class="form-control " name="cinema_id" required>
                                                <option value="">-- Select The Cinema Location --
                                                </option>
                                                <option value=""></option>
                                                @foreach($cinema as $cinemas)
                                                    <option value="{{ $cinemas->id }}">{{ $cinemas->cinema_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>                                                 
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div> 
                                    
                                    <label class="col-md-1 col-xs-4 control-label">User Type</label>
                                    <div class="col-md-3 col-xs-4">                                             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-sitemap"></span></span>
                                            <select class="form-control " name="is_admin" required>
                                                <option value="">-- Select The Staff Type --
                                                </option>
                                                <option value=""></option>
                                                <option value="1">Admin</option>
                                                <option value="2">Staff</option>
                                            </select>
                                        </div>                                                 
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div> 
                                </div>
                            </div>
                            

                                <div class="panel-footer col-md-12">                                 
                                    <button class="btn btn-success pull-right" name="">ADD THE STAFF DETAILS</button>
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