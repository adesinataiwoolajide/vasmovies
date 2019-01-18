@extends("partials.header")
    @section("content")
        <ul class="breadcrumb">
            <li><a href="{{ route("dash") }}">Home</a></li>  
            <li><a href="{{ route("user.edit", $user->id) }}">Edit User</a></li> 
            <li><a href="{{ route("user.create") }}">Add User</a></li>  
            <li><a href="{{ route("user.index") }}">List of Users</a></li>                
            <li class="active"></li>
        </ul>
        <!-- END BREADCRUMB -->                       
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route("user.update", $user->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Edit The </strong> User Details</h3>
                            </div>
                           

                            <div class="panel-body">
                                <h3><p style="color: green" align="center">Please fill the below form to update the staff details</p></h3>
                            </div>
                            @include('partials.message')
                            <div class="panel-body form-group-separated">    
                                <div class="form-group col-md-12">
                                    <label class="col-md-1 col-xs-6 control-label">FULL NAME</label>
                                    <div class="col-md-5 col-xs-6">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Please Enter The Name" required minlength="2" />
                                        </div>   
                                        @if ($errors->has('name'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif                                         
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div>

                                    <label class="col-md-1 col-xs-6 control-label">E-MAIL</label>
                                    <div class="col-md-5 col-xs-6">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                            <input type="email" class="form-control" name="email" placeholder="Please Enter The E-Mail" value="{{ $user->email }}" required minlength="2" />
                                        </div>                                            
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                        @if ($errors->has('email'))
                                           <div class="alert alert-danger">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif   
                                    </div>
                                </div>
                            
                            </div>
                            <div class="panel-body form-group-separated">  
                                <div class="form-group col-md-12">  
                                    <label class="col-md-1 col-xs-12 control-label">PASSWORD</label>
                                    <div class="col-md-11 col-xs-12">                                             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                                            <input type="password" class="form-control" name="password" placeholder="Please Enter The Password" required minlength="2" />
                                        </div>   
                                        @if ($errors->has('password'))
                                           <div class="alert alert-danger">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif                                                
                                        <span class="help-block" style="color: green;">This is field is Required.</span>
                                    </div> 
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{ $user->id}}">
                            <div class="panel-footer col-md-12">                                 
                                <button class="btn btn-success pull-right" name="">UPDATE THE STAFF DETAILS</button>
                            </div>
                        </div>
                    </form>                         
                </div>
               
            </div>
        </div>                             
    </div>            
</div>
@endsection