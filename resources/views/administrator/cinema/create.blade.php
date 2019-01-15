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
                    <form action="{{ route("cinema.save") }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="panel panel-default">
                            
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
                                            <input type="text" class="form-control" name="cinema_name" placeholder="Please Enter The Type Name" required minlength="2" />
                                        </div>                                            
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div>
                                    <label class="col-md-1 col-xs-5 control-label">CINEMA LOCATION</label>
                                    <div class="col-md-4 col-xs-5">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
                                            <select class="form-control " name="cinema_location" required>
                                                <option value="">-- Select The Cinema Location --
                                                </option>
                                                <option value=""></option>
                                                <option value="Apapa">Apapa</option>
                                                <option value="Ikeja">Ikeja</option>
                                                <option value="Lekki">Lekki</option>
                                            </select>
                                        </div>                                                 
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div>  
    
                                    <div class="col-md-2 col-xs-2">                                            
                                        <div class="input-group">
                                            <button class="btn btn-success pull-right">ADD A NEW CINEMA</button>
                                        </div>                                                 
                                        <span class="help-block" style="color: red;">This is field is Required.</span>
                                    </div>  
                                </div>
                            </div>
                           
                        </div>
                    </form>                         
                </div>
                
                <div class="col-md-12">
                    @if( count($cinema) > 0)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">List of All Cinema Houses</h3>
                            </div>
                            <div class="panel-body">
                                <table id="customers2" class="table datatable">
                                    <thead align="center">
                                        <tr>
                                            <th>S/N</th>
                                            <th>Cinema Name</th>
                                            <th>Location</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tfoot align="center">
                                        <tr>
                                            <th>S/N</th>
                                            <th>Cinema Name</th>
                                            <th>Location</th>
                                            <th>Operations</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $number =1; ?>
                                        @foreach($cinema as $cinemas)
                                            <tr>
                                                <td><?php echo $number ?></td>
                                                <td>{{ $cinemas->cinema_name }}</td>
                                                <td>{{ $cinemas->cinema_location }}</td>
                                                <td><a href="" class="btn btn-success"><i class="fa fa-cogs"></i> Movie List</a>
                                                    <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                                    <a href="{{ route("cinema.delete", $cinemas->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr><?php $number++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <h4><p style="color: red" align="center">The Cinema List is Empty </p></h4>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>                             
    </div>            
</div>
@endsection