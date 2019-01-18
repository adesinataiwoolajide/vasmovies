@extends("partials.website-header")
    @section("content")
        @include('partials.nav')

        <section class="page-header overlay-gradient" style="background: url(assets/images/posters/movie-collection.jpg);">
            <div class="container">
                <div class="inner">
                    
                </div>
            </div>
        </section>

        <main class="ptb100">
            <div class="container">
               <div class="row mb50">
                        <div class="col-md-6">
                        <!-- Layout Switcher -->
                            <div class="layout-switcher">
                                <a href="" class="grid active"><i class="fa fa-th"></i></a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h4 class="title"> Movie Showtime</h4>

                        </div>
                </div>
                <!-- Start of Movie List -->
                <div class="row">
                    @if(count($moviedays) == 0)
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h3><p style="color: red" align="center">No Movie is available for the selected Day</p></h3>
                        </div>
                    @else
                        
                        @foreach($moviedays as $list)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="movie-box-2 mb30">
                                    <div class="listing-container">

                                        <!-- Movie List Image -->
                                        <div class="listing-image">
                                            <!-- Image -->
                                            @foreach(gettingMoives($list->id) as $droping)
                                                <img src="{{asset('movie_banner/'.$droping->movie_banner)}}" style="width:350px; height: 444px;" align="center">
                                             @endforeach
                                        </div>

                                        <!-- Movie List Content -->
                                        <div class="listing-content">
                                            <div class="inner">
                                               @foreach(gettingMoivesId($list->id, $list->cinema_id) as $droping)
                                                    <h4 class="title">{{$droping->movie_title}}</h4>
                                                @endforeach

                                                <a href="{{ route("movie.details", $list->id) }}" class="btn btn-main btn-effect">details</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="sidebar">

                                    <!-- Start of Details Widget -->
                                    <aside class="widget widget-movie-details">
                                        <h3 class="title">Showing Details</h3>

                                        <ul>
                                            @foreach(gettingCinemaMovesHowtimes($list->cinema_id) as $drop)
                                               <li><strong>In Cenema: </strong>{{$drop->showing_date}}</li>
                                               <li><strong>Showing Time: </strong>{{$drop->showing_time}}</li>
                                               <li><strong>Showing Date: </strong>{{$drop->showing_date}}</li>
                                               @foreach(cinemaDetais($list->cinema_id) as $loc)
                                                    <li><strong>Cinema House: </strong>{{$loc->cinema_name}}</li>
                                                @endforeach
                                            @endforeach
                                        </ul>
                                    </aside>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="sidebar">

                                    <!-- Start of Details Widget -->
                                    <aside class="widget widget-movie-details">
                                        <h3 class="title">Movie Details</h3>

                                        <ul>
                                            @foreach(gettingMoives($list->id) as $droping)
                                               <li><strong>Name: </strong>{{$droping->movie_title}}</li>
                                               <li><strong>Category: </strong>{{$droping->movie_category}}</li>
                                                <li><strong>Actors: </strong>{{$droping->top_actors}}</li>
                                               <li><strong>Description: </strong>{{$droping->description}}</li>
                                            @endforeach
                                        </ul>
                                    </aside>
                                </div>
                            </div>
                         @endforeach
                    @endif
                </div>
                
            </div>
        </main>

        <!-- =============== START OF FOOTER =============== -->
        @include('partials/website-footer')
        <!-- =============== END OF FOOTER =============== -->
    </div>
    <!-- =============== END OF WRAPPER =============== -->
    <div id="backtotop">
        <a href="#"></a>
    </div>
@endsection