@if(count($errors)>0)
    @foreach($errors->all() as $error )
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>{{$error}}</strong>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h3><strong align="center">{{session('success')}}</strong></h3>
    </div>
@endif

@if(session('error'))   
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h3><strong style="color: red" align="center">{{session('error')}}</strong></h3>
    </div>
@endif