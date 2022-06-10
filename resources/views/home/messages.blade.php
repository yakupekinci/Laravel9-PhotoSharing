@if($messages=Session::get('success'))
    <div class="alert alert-success alert-box">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$messages}}</strong>
    </div>
@endif


@if($messages=Session::get('eror'))
    <div class="alert alert-danger alert-box">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$messages}}</strong>
    </div>
@endif


@if($messages=Session::get('warning'))
    <div class="alert alert-warning alert-box">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$messages}}</strong>
    </div>
@endif
@if($messages=Session::get('info'))
    <div class="alert alert-info alert-box">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$messages}}</strong>
    </div>
@endif
