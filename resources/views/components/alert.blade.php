@if(session('alert'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session('alert')}}
    </div>
@elseif(session('failed'))
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session('failed')}}
    </div>
@endif