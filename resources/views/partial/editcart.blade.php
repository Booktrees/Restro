@extends('layouts.apps')
@section('were')
	
<div class="container">
		<h1>My Books</h1>
		<div style="border-bottom: 6px double rgb(229, 229, 229);"></div>
			<p>Which part of your book would you like to edit today?</p><br>	
				<div class="row" style="display: flex;">
		
				<div class="col">
	        <h2 style="text-align: center;"><b>Edit Book Info</b></h2>
	      
	        <p style="text-align: center;">All fields marked with an * are mandatory fields.</p>
	      <div class="modal-body">

	      	{{--FORM TO CREATE THE BOOK  --}}

		        <form method="POST" action="{{ $cart->paths() }}">
					{{ csrf_field() }}

				<div class="row">			
				 	<div class="col">
				 		<div class="form-group">
		    				<label for="exampleInputEmail1">Name</label>
		    					<input type="text" class="form-control"  value = "{{$cart->name}}" name="name" placeholder="Enter Book Title"  required>
		  				</div>
					</div>
				   	<div class="col">
				   		<div class="form-group">
				    		<label for="exampleInputEmail1">Address</label>
				    			<input type="text" class="form-control" name="address" value = "{{$cart->address}}" placeholder="Enter Aurthor Name" required>
				 		 </div>
					</div>
				</div>
						<div class="row">			
				 	<div class="col">
				 		<div class="form-group">
		    				<label for="exampleInputEmail1">Menu Name</label>
		    					<input type="text" class="form-control"  name="title"  value = "{{$cart->title}}" placeholder="Enter Book Title"  readonly required>
		  				</div>
					</div>
				   	<div class="col">
				   		<div class="form-group">
				    		<label for="exampleInputEmail1">Phone</label>
				    			<input type="number" class="form-control" name="phone" value = "{{$cart->phone}}" placeholder="Enter Aurthor Name" required>
				 		 </div>
					</div>
				</div>
						<div class="row">			
				 	<div class="col">
				 		<div class="form-group">
		    				<label for="exampleInputEmail1">Price</label>
		    					<input type="number" class="form-control"  name="price"  value="12" placeholder="Enter Book Title"  readonly required>
		  				</div>
					</div>
				   	<div class="col">
				   		<div class="form-group">
				    		<label for="exampleInputEmail1">Quantity</label>
				    			<input type="number" class="form-control" name="quantity" value = "{{$cart->quantity}}" placeholder="Enter Aurthor Name" required>
				 		 </div>
					</div>
				</div>
				<div class="row">			
				 	<div class="col">
				 		<div class="form-group">
				</div>
		    				<label for="exampleInputEmail1">Deliver Time</label>
		    					<input type="time" class="form-control"  name="delivery_time" value = "{{$cart->delivery_time}}" placeholder="Enter Book Title"  required>
		  				</div>
					</div>
				</div>
				 <button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>
</div>
</div>
</div>

		

	
        @endsection