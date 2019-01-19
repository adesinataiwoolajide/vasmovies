
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>VAS Cinemas</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
            
        <link rel="stylesheet" type="text/css" id="theme" href="{{asset('administrator//css/theme-default.css')}}"/>                               
    </head>
    <body> 
        <div class="page-container">
            @include('partials.sidebar')
            @yield('content')
        </div>
        <script type="text/javascript" src="{{asset('administrator//js/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('administrator//js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('administrator//js/plugins/bootstrap/bootstrap.min.js')}}"></script>        
             
        <script type='text/javascript' src="{{asset('administrator//js/plugins/icheck/icheck.min.js')}}"></script>        
        <script type="text/javascript" src="{{asset('administrator//js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('administrator//js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('administrator//js/plugins/morris/raphael-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('administrator//js/plugins/morris/morris.min.js')}}"></script>       
        <script type="text/javascript" src="{{asset('administrator//js/plugins/rickshaw/d3.v3.js')}}"></script>
        <script type="text/javascript" src="{{asset('administrator//js/plugins/rickshaw/rickshaw.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('administrator//js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('administrator//js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

        <script type="text/javascript" src="{{asset('administrator//js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
        <script type="text/javascript" src="{{asset('administrator//js/plugins/bootstrap/bootstrap-select.js')}}"></script>
        <script type="text/javascript" src="{{asset('administrator//js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>                
        <script type='text/javascript' src="{{asset('administrator//js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>                
        <script type="text/javascript" src="{{asset('administrator//js/plugins/owl/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('administrator//js/plugins/datatables/jquery.dataTables.min.js')}}"></script>                 
        
        <script type="text/javascript" src="{{asset('administrator//js/plugins/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('administrator//js/plugins/daterangepicker/daterangepicker.js')}}"></script>
       
        <script type="text/javascript" src="{{asset('administrator//js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('administrator//js/actions.js')}}"></script>
        
    </body>
</html>


