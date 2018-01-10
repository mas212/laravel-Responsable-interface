@if(Session::has('success'))
	<div class="col-md-12 alert alert-success fade in" style="margin-top: 10px; margin-bottom: 0px;">
		<button data-dismiss="alert" class="close close-sm" type="button">
			<i class="icon-remove"></i>
		</button>
		<strong>Well done!</strong> {{ Session::get('success') }}
	</div> 
@elseif(Session::has('danger'))     
	<div class="col-md-12 alert alert-block alert-danger fade in" style="margin-top: 10px; margin-bottom: 0px;">
		<button data-dismiss="alert" class="close close-sm" type="button">
			<i class="icon-remove"></i>
		</button>
		<strong>Oh snap!</strong> {{ Session::get('danger') }}
	</div> 
@elseif(Session::has('info'))                              
	<div class="col-md-12 alert alert-info fade in" style="margin-top: 10px; margin-bottom: 0px;">
		<button data-dismiss="alert" class="close close-sm" type="button">
			<i class="icon-remove"></i>
		</button>
		<strong>Heads up!</strong> {{ Session::get('info') }}
	</div>
@elseif(Session::has('warning'))  
	<div class="col-md-12 alert alert-warning fade in" style="margin-top: 10px; margin-bottom: 0px;">
		<button data-dismiss="alert" class="close close-sm" type="button">
			<i class="icon-remove"></i>
		</button>
		<strong>Warning!</strong> {{ Session::get('warning') }}
	</div>
@endif
