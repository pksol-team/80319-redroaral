@extends('main')

@section('title', 'Edit Request')
@section('content')	
	<div id="dashboard-form" class="usa">
		<div id="changerequest-form" class="usa" style="">
	        <div class="frame2-changereq" id="frame2-changereq">
	            <div class="changereq-title">
	                <label>Edit Request</label>
	            </div>	            
				<form id="contact-form" class="form-horizontal" method="POST" action="/update_customer_order">
	              	{{ csrf_field() }}
		            <div class="row1-changereq-info">
		            	<div class="changereq-input">
		            	    @if ($data->users->isAdmin == 2)
		            	    	@php
		            	    		$user = "Lead Gen";		
		            	    	@endphp
		            	    @elseif($data->users->isAdmin == 3 || $data->users->isAdmin == 4)
		            	    	@php
		            	    		$user = "Customer";		
		            	    	@endphp
		            	    @endif
		            	    <label>Requested By <b style="font-size: 15px; color: black">{{ $user }}</b></label>
		            	    <input type="text" name="" value="{{ $data->users->name }}" disabled="">							
		            	</div>
		            	<div class="changereq-input">
		            	    <label>Date Placed</label>
		            	    <input type="date" name="purchased_date" value="{{ $data->purchased_date }}" disabled="">							
		            	</div>
		                <div class="changereq-input">
		                    <label>Request Type</label>								
		                    <select name="product_type" disabled="">
		                    	@if ($data->products->product_type == 'Lead')
			                    	<option value="Lead" selected="">Lead</option>
			                    	<option value="Sales">Sales</option>
			                    @else
			                    	<option value="Lead" >Lead</option>
			                    	<option value="Sales" selected="">Sales</option>
		                    	@endif
		                    </select>
		                </div>
		                <div class="changereq-input">
		                    <label>Level</label>								
		                    <select name="product_name" disabled="">
		                    	@if ($data->products->product_name == 'Bronze')
			                    	<option value="Bronze" selected="">Bronze</option>
			                    	<option value="Silver">Silver</option>
			                    	<option value="Gold">Gold</option>
			                    @elseif($data->products->product_name == 'Silver')
			                    	<option value="Bronze" >Bronze</option>
			                    	<option value="Silver" selected="">Silver</option>
			                    	<option value="Gold">Gold</option>
			                    @else
			                    	<option value="Bronze" >Bronze</option>
			                    	<option value="Silver" >Silver</option>
			                    	<option value="Gold" selected="">Gold</option>
			                    @endif
		                    </select>
		                </div>
		                <div class="changereq-input">
		                    <label>Quantity</label>
		                    <input type="text" name="quantity" value="{{ $data->quantity }}" disabled="">
		                </div>	
		                <div class="changereq-input">
		                    <label>Cost Per Rquest</label>
		                    <input type="text" name="item_cost" value="{{ $data->products->price }}" disabled="">
		                </div>
		                <div class="changereq-input">
		                    <label>Total(Exclude VAT)</label>
		                    <input type="text" name="exclude_vat" value="{{ $data->exclude_vat }}" disabled="">
		                </div>
		                <div class="changereq-input">
		                    <label>Total(Include VAT)</label>
		                    <input type="text" name="include_vat" value="{{ $data->include_vat }}" disabled="">
		                </div> 
		                <div class="changereq-input">
		                    <label>Status</label>
		                    <select name="status">
		                    	@if ($data->status == 'Completed')
			                    	<option value="Pending">Pending</option>
			                    	<option value="Completed" selected="">Completed</option>
			                    @else
			                    	<option value="Pending" selected="">Pending</option>
			                    	<option value="Completed">Completed</option>
		                    	@endif
		                    </select>
		                </div> 
		                <div class="changereq-input">
		                    <label>Payment Status</label>
		                    <select name="payment_status">
		                    	@if ($data->payment_status == 'Paid')
			                    	<option value="Paid" selected="">Paid</option>
			                    	<option value="Awaiting Payment">Awaiting Payment</option>
			                    @else
			                    	<option value="Paid">Paid</option>
			                    	<option value="Awaiting Payment" selected="">Awaiting Payment</option>
		                    	@endif
		                    </select>
		                </div>              
		                <input type="hidden" name="order_id" value="{{ $data->order_id }}">	                
		                <input type="hidden" name="product_id" value="{{ $data->products->id }}">	                
		                <button type="submit" class="btn-changereq-submit">Update</button>
		            </div>
		        </form>
	        </div>
		</div>
	</div>

{{-- 	<script>
		jQuery(document).ready(function($) {	

			$('select[name="product_type"], select[name="product_name"]').change(function(){
				var product_type = $('select[name="product_type"]').val();
				var product_name = $('select[name="product_name"]').val();
				var data = [product_type, product_name];
				$.ajax({
					url: '/get_data',
					type: 'POST',
					data: {
						"_token": "{{ csrf_token() }}",
						product_type: product_type,
						product_name: product_name
					},
				})
				.done(function(response) {
					var response_data = jQuery.parseJSON(response);
					$('input[name="item_cost"]').attr('value', response_data.quantity);
					$('b.quantity').html(response_data.price);
					$('input[name="product_id"]').attr('value', response_data.id);
				});					
				
			});

			$("input[name='quantity']").keyup(function() {
				var quantity = $(this).val();

				var cost = $("input[name='item_cost']").val();

				var exclude_vat = quantity * cost ;

				$("input[name='exclude_vat']").attr('value', exclude_vat);

				var include_vat = 10 + exclude_vat;

				$("input[name='include_vat']").attr('value', include_vat);
				
			});
		});
	</script> --}}

@endsection()