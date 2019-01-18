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
                <!-- Start of Filters -->
                <div class="row mb50">
                    <div class="col-md-6">
                        <!-- Layout Switcher -->
                        <div class="layout-switcher">
                            <a href="{{ route('movie.list')}}" class="grid active"><i class="fa fa-th"></i></a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3><p>List of Movies</p></h3>

                    </div>
                </div>

                <div class="row">
                    <!-- Movie List Item -->
                    @foreach($movie as $movies)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="movie-box-2 mb30">
                                <div class="listing-container">

                                    <!-- Movie List Image -->
                                    <div class="listing-image">
                                        <!-- Rating -->
                                        <div class="stars">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                       <img src="{{asset('movie_banner/'.$movies->movie_banner)}}" style="width:350px; height: 444px;" align="center">
                                    </div>

                                    <!-- Movie List Content -->
                                    <div class="listing-content">
                                        <div class="inner">
                                            <h2 class="title">{{$movies->movie_title}}</h2>

                                            <p>{{$movies->description}}</p>

                                            <a href="{{ route("movie.details", $movies->id) }}" class="btn btn-main btn-effect">details</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                
            </div>
        </main>

        @include('partials/website-footer')

    <div id="backtotop">
        <a href="#"></a>
    </div>
@endsection