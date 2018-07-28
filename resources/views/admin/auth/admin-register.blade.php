
@extends('admin.layouts.app')

@section('content')

	
	<h1>Admin Registration Form</h1>
	<form method="POST" action="/admin/register">
		@csrf
		<div class="row">
			<div class="col-sm-6">				
				<div class="form-group">
					<input type="text" name="name" id="email" class="form-control input-sm" placeholder="Name" >
				</div>
			</div>

			<div class="col-sm-6">
				<div class="form-group">
						<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required>
				</div>
			</div>
		</div>

	<div class="row">
			<div class="col-sm-6">				
				<div class="form-group">
					<input type="password" name="password" id="email" class="form-control input-sm" placeholder="Password" >
				</div>
			</div>
				<div class="col-sm-6">				
					<div class="form-group">
				<button class="btn btn-primary" type="submit">Add</button>
				</div>
			</div>

		</div>
	</form>

   @endsection