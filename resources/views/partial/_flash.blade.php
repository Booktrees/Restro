@if (Session::has('success'))
	
	<div class="alert alert-success" role="alert" style="    position: absolute;
    margin: 900px 0px 30px 4px;">
		<strong>Success:</strong> {{ Session::get('success') }}
	</div>
 @endif
 @if (count($errors) > 0)
 	<div class="alert alert-danger" role="alert">
		<strong>Errors:</strong>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach  
		</ul>
	</div>
 @endif 
 