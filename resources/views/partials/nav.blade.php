<header class="header header-fixed header-transparent text-white">
        <div class="container-fluid">

            <!-- ====== Start of Navbar ====== -->
            <nav class="navbar navbar-expand-lg">

                <a class="navbar-brand" href="{{route('website.home')}}">
                    <h5 style="color: white" style="margin-top: -50px"><b><i class="fa fa-image"></i>VasCinema</b></h5><br>
                </a>

                <button id="mobile-nav-toggler" class="hamburger hamburger--collapse" type="button">
                   <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                   </span>
                </button>

                <!-- ====== Start of #main-nav ====== -->
                <div class="navbar-collapse" id="main-nav">

                    <!-- ====== Start of Main Menu ====== -->
                    <ul class="navbar-nav mx-auto" id="main-menu">
                        <!-- Menu Item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('website.home')}}">Home</a>
                        </li>

                        <!-- Menu Item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cinema</a>

                            <!-- Dropdown Menu -->
                            <ul class="dropdown-menu">
                                <!-- Menu Item -->
                                @foreach($cinema as $cinemas)
                                    <li>
                                        <a class="dropdown-item" href="{{ route('movie.cinema', $cinemas->id)}}">{{ $cinemas->cinema_name. " ". $cinemas->cinema_location}}</a>
                                    </li>

                                    <!-- Divider -->
                                    <li class="divider" role="separator"></li>
                                 @endforeach
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Movies</a>

                            <!-- Dropdown Menu -->
                            <ul class="dropdown-menu">
                                <!-- Menu Item -->
                                @foreach($movie as $movies)
                                    <li>
                                        <a class="dropdown-item" href="{{ route("movie.show", $movies->id) }}">
                                        	{{ $movies->movie_title}}
                                        </a>
                                    </li>

                                    <!-- Divider -->
                                    <li class="divider" role="separator"></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Showtimes</a>
    
                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <!-- Menu Item --><?php
                                    $day = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
                                    ?>
                                    
                                    @foreach($day as $days)
                                        <li>
                                            <a class="dropdown-item" href="{{ route('movie.day', $days)}}">{{ $days}}</a>
                                        </li>
    
                                        <!-- Divider -->
                                        <li class="divider" role="separator"></li>
                                     @endforeach
                                </ul>
                            </li>
                        <!-- Menu Item -->
                        <li class="nav-item">
                            <a class="nav-link" href="">Contact us</a>
                        </li>

                    </ul>
                   
                </div>
                <!-- ====== End of #main-nav ====== -->
            </nav>
            <!-- ====== End of Navbar ====== -->

        </div>
    </header>