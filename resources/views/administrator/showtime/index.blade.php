@extends("partials.header")
    @section("content")
        <ul class="breadcrumb">
            <li><a href="{{ route("dash") }}">Home</a></li>  
            <li><a href="{{ route("showtime.create") }}">Add Showtime</a></li>  
            <li><a href="{{ route("showtime.index") }}">List of Showtimes</a></li>                
            <li class="active"></li>
        </ul>
        <!-- END BREADCRUMB -->                       
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                     @include('partials.message')
                    @if( count($showtime) > 0)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">List of All Cinema Show Times</h3>
                            </div>
                            <div class="panel-body">
                                <table id="customers2" class="table datatable">
                                    <thead align="center">
                                        <tr>
                                            <th>S/N</th>
                                            <th>Cinema Title</th>
                                            <th>Cinema Banner</th>
                                            <th>Location</th>
                                            <th>Showing Date</th>
                                            <th>Showing Time</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tfoot align="center">
                                        <tr>
                                           <th>S/N</th>
                                            <th>Cinema Title</th>
                                            <th>Cinema Banner</th>
                                            <th>Location</th>
                                            <th>Showing Date</th>
                                            <th>Showing Time</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $number =1; ?>
                                        @foreach($showtime as $showtimes)
                                            <tr>
                                                <td><?php echo $number ?></td>
                                                <td></td>
                                                <td>Image</td>
                                                <td>{{ $showtimes->id }}</td>
                                                <td>{{ $showtimes->showing_date }}</td>
                                                <td>{{ $showtimes->showing_time }}</td>
                                                <td>
                                                    <a href="{{ route("showtime.edit", $showtimes->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                                    <a href="{{ route("showtime.delete", $showtimes->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
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
                                <h4><p style="color: red" align="center">The Showtime List is Empty </p></h4>
                            </div>
                        </div>
                    @endif                       
                </div>
               
            </div>
        </div>                             
    </div>            
</div>
@endsection