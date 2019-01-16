
<div class="page-sidebar">
    <ul class="x-navigation">
        <li class="xn-logo">
            <a class="navbar-brand" href="{{ route("dash") }}"><h5>VAS CIMENA</h5></a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            
            <div class="profile">
                
                <div class="profile">
                    
                    <div class="profile-data">
                        <div class="profile-data-name">Welcome <br>{{ Auth::user()->name }}</div>
                        
                    </div>
                    
                </div> 
            </div>                                                                        
        </li>
        <li class="xn-title">Navigation</li>
        <li class="">
            <a href="{{ route("dash") }}"><span class="fa fa-desktop"></span> <span class="xn-text">Home Page</span></a>
        </li>
        <li class="xn-openable">
            <a href=""><span class="fa fa-building"></span> <span class="xn-text">Cinema</span></a>
            <ul>
                <li><a href="{{ route("cinema.index") }}"><span class="fa fa-align-justify"></span> View Cinema</a></li>
            </ul>         
        </li> 
        <li class="xn-openable">
            <a href=""><span class="fa fa-users"></span> <span class="xn-text">Users</span></a>
            <ul>
                <li><a href="{{ route("user.index") }}"><span class="fa fa-align-justify"></span> View Users</a></li>
                <li><a href="{{ route("user.create") }}"><span class="fa fa-plus"></span> Add Users</a></li>
            </ul>         
        </li> 
        <!-- <li class="xn-openable">
            <a href=""><span class="fa fa-image"></span> <span class="xn-text">Movies</span></a>
            <ul>
                <li><a href="{{ route("movie.create") }}"><span class="fa fa-align-center"></span> Add Movie</a></li>
                <li><a href="{{ route("movie.index") }}"><span class="fa fa-align-justify"></span> View Movies</a></li>
                <li><a href="{{ route("movie.gallery") }}"><span class="fa fa-align-justify"></span> View Movies</a></li>
            </ul>         
        </li>  -->

        <li class="xn-openable">
            <a href=""><span class="fa fa-image"></span> <span class="xn-text">Show Times</span></a>
            <ul>
                <li><a href="{{ route("showtime.create") }}"><span class="fa fa-align-center"></span> Add A Showtime</a></li>
                <li><a href="{{ route("showtime.index") }}"><span class="fa fa-align-justify"></span> View Show time</a></li>
                <li><a href="{{ route("showtime.cinema") }}"><span class="fa fa-align-justify"></span> View Cinema Show</a></li>
            </ul>         
        </li> 
 
    </ul>

</div>
<div class="page-content">

    <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
        
        <li class="xn-icon-button">
            <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
        </li>

        <li class="xn-icon-button pull-right">
            <a href="{{ route("admininistrator.logout") }}" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
        </li>
        
    </ul>

    <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                <div class="mb-content">
                    <p>{{ Auth::user()->name }} Are you sure you want to log out?</p>                    
                    <p>Press No if you want to continue work. Press Yes to logout.</p>
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <a href="{{ route("admininistrator.logout") }}" class="btn btn-success btn-lg">Yes</a>
                        <button class="btn btn-default btn-lg mb-control-close">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>