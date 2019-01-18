@extends("partials.website-header")
    @section("content")
        @include('partials.nav')
       
        <section class="page-header overlay-gradient" style="background: url(assets/images/posters/movie-collection.jpg);">
            <div class="container">
                
            </div>
        </section>
       <section class="latest-tvshows ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="title">Our Movies</h2>
                    </div>


                    <div class="col-md-4 align-self-center text-right">
                        <a href="{{ route('movie.list')}}" class="btn btn-icon btn-main btn-effect">
                            view all
                            <i class="ti-angle-double-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Start of Latest Movies Slider -->
                <div class="owl-carousel latest-tvshows-slider mt20">
                    <!-- === Start of Sliding Item 1 === -->
                    @foreach($movie as $movies)
	                    <div class="item">
	                        <!-- Start of Movie Box -->
	                        <div class="movie-box-1">

	                            <!-- Start of Poster -->
	                            <div class="poster">
	                                <img src="{{asset('movie_banner/'.$movies->movie_banner)}}" style="width:300px; height: 444px;" align="center">
	                            </div>
	                            <!-- End of Poster -->

	                            <!-- Start of Movie Details -->
	                            <div class="movie-details">
	                                <h4 class="movie-title">
	                                    <a href="{{ route("movie.details", $movies->id) }}">{{$movies->movie_title}}</a>
                                    </h4>
                                    @foreach(gettingCinemaMovesHowtimes($movies->cinema_id) as $drop)
                                        <span class="released">{{$drop->showing_date}}</span>
                                        <span class="released">{{$drop->showing_time}}</span>
                                        
                                    @endforeach
	                            </div>
	                            <!-- End of Movie Details -->

	                            <!-- Start of Rating -->
	                            <div class="stars">
	                                <div class="rating">
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star-o"></i>
	                                </div>
	                                <span>7.5 / 10</span>
	                            </div>
	                            <!-- End of Rating -->

	                        </div>
	                        <!-- End of Movie Box -->
	                    </div>
	                @endforeach

                </div>
                <!-- End of Latest Movies Slider -->
            </div>
        </section>
        <!-- =============== START OF FOOTER =============== -->
         @include('partials/website-footer')
        <!-- =============== END OF FOOTER =============== -->
    </div>
    <!-- ===== Start of Back to Top Button ===== -->
    <div id="backtotop">
        <a href="#"></a>
    </div>
@endsection