@if(session('notice-success'))
        <div class="alert alert-success" role="alert">
            {{session('notice-success')}}
        </div>
@elseif(session('notice-error'))
        <div class="alert alert-danger" role="alert">
            {{session('notice-error')}}
        </div>
@endif