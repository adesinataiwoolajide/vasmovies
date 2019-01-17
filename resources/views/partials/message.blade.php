

@if(session('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><strong align="center">{{session('success')}}</strong></h5>
    </div>
@endif

@if(session('error'))   
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        </h5><strong style="color: red" align="center">{{session('error')}}</strong></h5>
    </div>
@endif