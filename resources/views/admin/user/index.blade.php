@extends("partials.header")
    @section("content")
        <ul class="breadcrumb">
            <li><a href="{{ route("dash") }}">Home</a></li>  
            <li><a href="{{ route("user.index") }}">List of Users</a></li>  
            <li><a href="{{ route("user.create") }}">Add User</a></li>                    
            <li class="active"></li>
        </ul>
        <!-- END BREADCRUMB -->                       
        @include('partials.message')
        <div class="page-content-wrap">
            <div class="row">
                
                
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <table id="customers2" class="table datatable">
                            <thead align="center">
                                <tr>
                                    <th>S/N</th>
                                    <th>E-Mail</th>
                                    <th>Full Name</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>
                            <tfoot align="center">
                                <tr>
                                    <th>S/N</th>
                                    <th>E-Mail</th>
                                    <th>Full Name</th>
                                    <th>Operations</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $number =1; ?>
                                @foreach($user as $users)
                                    <tr>
                                        <td><?php echo $number ?></td>
                                        <td>{{ $users->email }}</td>
                                        <td>{{ $users->name }}</td>
                                        <td>
                                            <a href="{{ route("user.edit", $users->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="{{ route("user.delete", $users->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
                                        </td>
                                    </tr><?php $number++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>                             
    </div>            
</div>
@endsection