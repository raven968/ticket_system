@foreach($errors->all() as $error)
    <div class="alert alert-custom alert-warning" role="alert">
        <div class="alert-icon"><i class="flaticon-warning"></i></div>
        <div class="alert-text">{{ $error }}</div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="la la-close"></i></span>
            </button>
        </div>
    </div>
@endforeach

@if(Session::has('message'))
	<div class="alert alert-dismissible alert-{{ Session::get('message')['type'] }}" role="alert">
      {{ Session::get('message')['message'] }}
      
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="la la-close"></i></span>
            </button>

	</div>
@endif