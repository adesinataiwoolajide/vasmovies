@extends("partials.header")
    @section("content")
        <ul class="breadcrumb">
            <li><a href="{{ route("dash") }}">Home</a></li>  
            <li><a href="{{ route("movie.gallery") }}">List of Gallery</a></li>  
            <li><a href="{{ route("movie.index") }}">List of Movies</a></li>  
            <li><a href="{{ route("movie.create") }}">Add Movie</a></li>                    
            <li class="active"></li>
        </ul>
        <!-- END BREADCRUMB -->                       
        @include('partials.message')
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                     <div class="content-frame">   
                        <div class="content-frame-top">                        
                            <div class="page-title">                    
                                <h2><span class="fa fa-image"></span> Gallery</h2>
                            </div>                                      
                            <div class="pull-right">                            
                                <button class="btn btn-primary"><span class="fa fa-upload"></span> Upload</button>
                                <button class="btn btn-default content-frame-right-toggle"><span class="fa fa-bars"></span></button>
                            </div>                         
                        </div>
                        
                        <!-- START CONTENT FRAME RIGHT -->
                        <div class="content-frame-right">                        
                            <div class="block push-up-10">
                                <form action="upload.php" class="dropzone dropzone-mini"></form>
                            </div>                        
                            <h4>Groups:  {{ count($movie)}}</h4>
                            <div class="list-group border-bottom push-down-20">
                                
                                 @foreach($movie as $tag)

                                    <a href="#" class="list-group-item "><span class="fa fa-tag"></span> {{ $tag->movie_category}}</a></li>
                                @endforeach
                            </div>                                                
                            <h4>Tags:</h4>
                            <ul class="list-tags">
                                @foreach($movie as $tag)
                                    <li><a href="#"><span class="fa fa-tag"></span> {{ $tag->movie_category}}</a></li>
                                @endforeach
                                
                            </ul>
                        </div>
                        <!-- END CONTENT FRAME RIGHT -->
                    
                        <!-- START CONTENT FRAME BODY -->
                        <div class="content-frame-body content-frame-body-left">
                            
                            <div class="pull-left push-up-10">
                                <button class="btn btn-primary" id="gallery-toggle-items">Toggle All</button>
                            </div>
                            <div class="pull-right push-up-10">
                                <div class="btn-group">
                                    <button class="btn btn-primary"><span class="fa fa-pencil"></span> Edit</button>
                                    <button class="btn btn-primary"><span class="fa fa-trash-o"></span> Delete</button>
                                </div>                            
                            </div>
                            
                            <div class="gallery" id="links">
                                 
                                <a class="gallery-item" href="{{asset('movie_banner/'.$movie->movie_banner)}}" title="Nature Image 1" data-gallery>
                                    <div class="image">                              
                                        <img src="{{asset('movie_banner/'.$movie->movie_banner)}}" style="width:100px; height: 100px;" align="center">                                        
                                        <ul class="gallery-item-controls">
                                            <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                            <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                        </ul>                                                                    
                                    </div>
                                    <div class="meta">
                                        <strong>Nature image 1</strong>
                                        <span>Description</span>
                                    </div>                                
                                </a>

                                <a class="gallery-item" href="assets/images/gallery/music-1.jpg" title="Music picture 1" data-gallery>
                                    <div class="image">
                                        <img src="assets/images/gallery/music-1.jpg" alt="Music picture 1"/>    
                                        <ul class="gallery-item-controls">
                                            <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                            <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                        </ul>                                                                    
                                    </div>
                                    <div class="meta">
                                        <strong>Music picture 1</strong>
                                        <span>Other description</span>
                                    </div>                                
                                </a>    
                            </div>
                        </div>                 
                            
                           
                    </div>
                </div>
            </div>
        </div>                             
    </div> 
    <script>            
        document.getElementById('links').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement;
            var link = target.src ? target.parentNode : target;
            var options = {index: link, event: event,onclosed: function(){
                    setTimeout(function(){
                        $("body").css("overflow","");
                    },200);                        
                }};
            var links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    </script>                  
</div>
@endsection