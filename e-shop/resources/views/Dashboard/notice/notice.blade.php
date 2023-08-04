@if(session('notice-success'))
<div class="alert alert-success" role="alert">
    {{session('notice-success')}}
</div>
@elseif(session('notice-error'))
<div class="alert alert-danger" role="alert">
    {{session('notice-error')}}
</div>
@endif
@error('name')
<div class="alert alert-danger" role="alert">
    {{$message}}
</div>
@enderror