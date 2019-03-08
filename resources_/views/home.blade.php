@extends('main')

@section('title', 'Dashboard')

{{-- @section('active', 'active') --}}

@section('content')	


	<div id="dashboard-form" class="usa">
		@if(Auth::user()->isAdmin == 1)
		    <div class="frame1-dash">	
				@if ($data)
					@foreach ($data['products_order'] as $requests)
						<div class="column-dash inlineBlock">
						    <div class="title-col-dash">
						        <label> {{ $requests['user'] }} </label>
						    </div>	
						    <div class="column-dash-img">
						        <img src="resources/icons/minilaptop.png">
						        <img src="resources/icons/miniserver.png">
						        <img src="resources/icons/minimonitor.png">
						        <img src="resources/icons/minimouse.png">
						        <img src="resources/icons/minikeyboard.png">
						        <img src="resources/icons/minihardphone.png">
						        <img src="resources/icons/miniheadset.png">
						    </div>	
					        <div class="row1-dash-info">
					            <div class="column-dash-label">
					        		<label>Bronze Lead</label>
					            </div>
					            <div class="column-dash-label">
					        		<label>Silver Lead</label>
					            </div>
					            <div class="column-dash-label">
					        		<label>Gold Lead</label>
					            </div>
					            <div class="column-dash-label">
					        		<label>Bronze Sales</label>
					            </div>
					            <div class="column-dash-label">
					        		<label>Silver Sales</label>
					            </div>
					            <div class="column-dash-label">
					        		<label>Gold Sales</label>
					            </div>
								<div class="column-dash-label">
									<label>Total</label>
								</div>
							</div>
							<div class="row2-dash-count">	
					            <div class="column-dash-count">
					                <label>{{ $requests['bronze_lead'] }}</label>
					            </div>
					            <div class="column-dash-count">
					                <label>{{ $requests['silver_lead'] }}</label>
					            </div>
					            <div class="column-dash-count">
					                <label>{{ $requests['gold_lead'] }}</label>
					            </div>
					            <div class="column-dash-count">
					                <label>{{ $requests['bronze_sales'] }}</label>
					            </div>
					            <div class="column-dash-count">
					                <label>{{ $requests['silver_sales'] }}</label>
					            </div>
					            <div class="column-dash-count">
					                <label>{{ $requests['gold_sales'] }}</label>
					            </div>
								<div class="column-dash-count">
								    <label>{{ $requests['bronze_lead']+$requests['silver_lead']+ $requests['gold_lead']+ $requests['bronze_sales']+$requests['silver_sales']+$requests['gold_sales']}}</label>
								</div>			
							</div>
						</div>
					@endforeach	
				@endif
			</div>
		@elseif(Auth::user()->isAdmin == 2)		
			<div class="frame1-ip">
	            <div class="table-ip">
	            	<table id="example" class="table table-striped table-bordered" style="width:100%">
	            	        <thead>
	            	           <tr>
				                    <th>Request By</th>
				                    <th>Date Placed</th>
				                    <th>Order #</th>
				                    <th>Type Of Request</th>
				                    <th>Package</th>
				                    <th>Quantity</th>
				                    <th>Price Per Lead</th>
				                    <th>Total</th>
				                    <th>Action</th>
			                </tr>
	            	        </thead>     	
	            	        
	            	        <tbody>	            	        	
	            	        	@foreach($data as $requsts)
		            	        	<tr>                 	
			                    	    <td>{{ $requsts->name }}</td>
			                    	    <td>{{ $requsts->purchased_date }}</td>
			                    	    <td>{{ $requsts->order_id }}</td>
			                    	    <td>{{ $requsts->product_type }}</td>
			                    	    <td>{{ $requsts->product_name }}</td>
			                    	    <td>{{ $requsts->quantity }}</td>
			                    	    <td>&#163; {{ $requsts->price }}</td>
			                    	    <td>&#163; {{ $requsts->exclude_vat }}</td>
			                    	    <td>
			                    	    	@if ($requsts->request_status == 'Active')
			                    	    		<div class="active_plus" data-attr="{{ $requsts->order_id }}">
			                    	    		+
			                    	    		</div> 
			                    	    	@else
				                    	    	<a href="/submit_request/{{ $requsts->order_id }}"><div class="deactive_plus" data-attr="{{ $requsts->order_id }}">
				                    	    		+
				                    	    	</div>
				                    	    	</a>  	
			                    	    	@endif
			                    	    </td>	

			                    	</tr>
	                    		@endforeach					            	  
	            	        </tbody>
	            	    </table>
	            </div>	            
			</div>
		@else
			<div class="frame1-ip">
	            <div class="table-ip">
	            	<table id="example" class="table table-striped table-bordered" style="width:100%">
	            	        <thead>
	            	            <tr>
	            	                <th>Date</th>
		                            <th>RequestType</th>
		                            <th>Quantity</th>
		                            <th>Cost Per Request</th>
		                            <th>Total(excl VAT)</th>
		                            {{-- <th>Total(inci VAT)</th> --}}
		                            {{-- <th>Viwe Leads</th> --}}
		                            {{-- <th>INVOICE</th> --}}
		                            <th>Payment Status</th>
	            	            </tr>
	            	        </thead>
	            	    
	            	        <tbody>
	            	        	@foreach($data as $requsts)
		            	        	<tr>                 	
			                    	    <td>{{ $requsts->purchased_date }}</td>
			                    	    <td>{{ $requsts->product_type }}</td>
			                    	    <td>{{ $requsts->quantity }}</td>
			                    	    <td>{{ $requsts->price }}</td>
			                    	    <td>&#163; {{ $requsts->exclude_vat }}</td>
			                    	    {{-- <td>&#163; {{ $requsts->include_vat }}</td> --}}
			                    	    {{-- <td><button type="" class="view_btn">View</button></td> --}}
		                            	{{-- <td><button type="" class="view_btn">Download</button></td> --}}
			                    	    <td>{{ $requsts->payment_status }}</td>
			                    	   {{--  <td><i class="fa fa-pencil edit_icon" aria-hidden="true"></i></td>	 --}}
			                    	</tr>
	                    		@endforeach					            	  
	            	        </tbody>
	            	    </table>
	            </div>	            
			</div>
		@endif

    </div>	

  <script>
  	jQuery(document).ready(function($) {
  		// $(".deactive_plus").click(function(event) {
  		// 	var $this = $(this);
  		// 	var order_id = $this.attr('data-attr');
  		// 	console.log(order_id);
  		// 	var active = 'Active';
  		// 	$.ajax({
  		// 		url: '/update_status',
  		// 		type: 'POST',
  		// 		data: {
  		// 			"_token": "{{ csrf_token() }}",
  		// 			active,
  		// 			order_id
  		// 		},
  		// 	})
  		// 	.done(function(response) {
  		// 		$this.attr('class', 'active_plus');
  		// 	});
  			
  		// });




  	});
  </script>



@endsection
