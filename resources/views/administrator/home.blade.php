@extends("partials.header")
    @section("content")
        <ul class="breadcrumb">
            <li><a href="">Home</a></li>                    
            <li class="active"></li>
        </ul>                       
        @include('partials.message')
        <div class="page-content-wrap">   
            <div class="row">
                <div class="row">
                    <div class="col-md-3">

                        <div class="widget widget-warning widget-carousel">
                            <div class="owl-carousel" id="owl-example">
                                <div>                                    
                                    <div class="widget-title">Total</div>                                                                        
                                    <div class="widget-subtitle">Users</div>
                                    <div class="widget-int">{{ count($user)}}</div>
                                </div>
                                <div>                                    
                                    <div class="widget-title">Cinema</div>
                                    <div class="widget-subtitle">House</div>
                                    <div class="widget-int">{{ count($cinema)}}</div>
                                </div>
                                <div>                                    
                                    <div class="widget-title">Total </div>
                                    <div class="widget-subtitle">Movies</div>
                                    <div class="widget-int">{{ count($movie)}}</div>
                                </div>
                            </div>                                                      
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-primary">
                            <div class="widget-title">CINEMA HOUSE</div>
                            <div class="widget-subtitle">26/08/2014</div>
                            <div class="widget-int">{{ count($movie)}}<span data-toggle="counter" data-to="{{ count($cinema)}}"></span></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-success">
                            <div class="widget-title">TOTAL MOVIES</div>
                            <div class="widget-subtitle">26/08/2014</div>
                            <div class="widget-int">{{ count($cinema)}} <span data-toggle="counter" data-to="{{ count($cinema)}}"></span></div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="widget widget-danger widget-padding-sm">
                            <div class="widget-big-int plugin-clock">00:00</div>                            
                            <div class="widget-subtitle plugin-date">Loading...</div>
                            <div class="widget-controls">                                
                                <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                            </div>                            
                            <div class="widget-buttons widget-c3">
                                <div class="col">
                                    <a href=""><span class="fa fa-clock-o"></span></a>
                                </div>
                                <div class="col">
                                    <a href=""><span class="fa fa-bell"></span></a>
                                </div>
                                <div class="col">
                                    <a href=""><span class="fa fa-calendar"></span></a>
                                </div>
                            </div>                            
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget widget-default widget-item-icon" onclick="location.href='';">
                            <div align="center">
                                <img src="/administrator/img/stock.png" style="width: 100px; height: 100px;" align="center">
                                <p align="center">Products Categories</p>
                            </div>      
                        </div>                            
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-default widget-item-icon" onclick="location.href='';">
                            <div align="center">
                                <img src="/administrator/img/images (2).jpg" style="width: 100px; height: 100px;" align="center">
                                <p align="center">Product Types</p>
                            </div>      
                        </div>                            
                    </div>

                    <div class="col-md-3">
                        <div class="widget widget-default widget-item-icon" onclick="location.href='';">
                            <div align="center">
                                <img src="/administrator/img/payment.jpg" style="width: 100px; height: 100px;" align="center">
                                <p align="center">Product Manufacturer</p>
                            </div>      
                        </div>                            
                    </div>

                    <div class="col-md-3">
                        <div class="widget widget-default widget-item-icon" onclick="location.href='view-all-products.php';">
                            <div align="center">
                                <img src="/administrator/img/images (3).jpg" style="width: 100px; height: 100px;" align="center">
                                <p align="center">Products</p>
                            </div>      
                        </div>                            
                    </div>

                    <div class="col-md-3">
                        <div class="widget widget-default widget-item-icon" onclick="location.href='';">
                            <div align="center">
                                <img src="/administrator/img/stock.png" style="width: 100px; height: 100px;" align="center">
                                <p align="center">Products Categories</p>
                            </div>      
                        </div>                            
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-default widget-item-icon" onclick="location.href='';">
                            <div align="center">
                                <img src="/administrator/img/images (2).jpg" style="width: 100px; height: 100px;" align="center">
                                <p align="center">Product Types</p>
                            </div>      
                        </div>                            
                    </div>

                    <div class="col-md-3">
                        <div class="widget widget-default widget-item-icon" onclick="location.href='';">
                            <div align="center">
                                <img src="/administrator/img/payment.jpg" style="width: 100px; height: 100px;" align="center">
                                <p align="center">Product Manufacturer</p>
                            </div>      
                        </div>                            
                    </div>

                    <div class="col-md-3">
                        <div class="widget widget-default widget-item-icon" onclick="location.href='view-all-products.php';">
                            <div align="center">
                                <img src="/administrator/img/images (3).jpg" style="width: 100px; height: 100px;" align="center">
                                <p align="center">Products</p>
                            </div>      
                        </div>                            
                    </div>


                    
                </div>
            <!-- END DASHBOARD CHART -->
            </div>
            
        </div>
        <!-- END PAGE CONTENT WRAPPER -->                                
    </div>            
<!-- END PAGE CONTENT -->
</div>
@endsection