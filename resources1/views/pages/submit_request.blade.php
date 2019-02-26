@extends('main')

@section('title', 'Submit A Lead')
@section('content')	
	<div id="dashboard-form" class="usa">
		<div id="changerequest-form" class="usa" style="">
	        <div class="frame2-changereq" id="frame2-changereq">
	            <div class="changereq-title">
	                <label>Submit A Lead</label>
	            </div>
	           {{--  @php
	            	@dump($data)
	            @endphp --}}
				<form id="contact-form" class="form-horizontal" method="POST" action="/update_order_lead">
	              	{{ csrf_field() }}	              	
		            <div class="row1-changereq-info">
	            	@if ($value)
			            	<div class="changereq-input">
			            	    <label>Order #</label>							
			            	    <input type="text" value="{{ $data->order_no }}" disabled="">
			            	</div>
			                <div class="changereq-input">
			            	    <label>Customer Name</label>
			            	    <input type="text" value="{{ $data->name }}" disabled="">
			            	</div>
			            	 <div class="changereq-input">
			                    <label>Request Type</label>		
			            	    <input type="text" value="{{ $data->product_type }}" disabled="">	
			                </div>
			                <div class="changereq-input">
			                    <label>Pakcage</label>	
			            	    <input type="text" value="{{ $data->product_name }}" disabled="">	
			                </div>
			               <div class="changereq-input">
			            	    <label>Business Name</label>
			            	    <input type="text" name="business_name_lead" value="">
			            	</div>
			                <div class="changereq-input">
			                    <label>Point of Contact </label>
			                    <input type="text" name="contact_lead" value="" >
			                </div>
			                <div class="changereq-input">
			                    <label>Phone no</label>
			                    <input type="text" name="phone_no_lead" value="" >
			                </div>
			                <div class="changereq-input">
			                    <label>Email Address</label>
			                    <input type="text" name="email_lead" value="">
			                </div>
			                <div class="changereq-input">
			                    <input type="hidden" name="order_id" value="{{ $data->order_id}}">
			                </div>
			                <div class="changereq-input">
			                    <input type="hidden" name="lead_id" value="{{ Auth::user()->user_id}}">
			                </div>

			                <br>

			                <div class="changereq-textarea">
			                    <label>Comment</label>
			                    <textarea disabled="">{{ $data->comment }}
			                    </textarea>
			                </div>
					@else
			            	<div class="changereq-input">
			            	    <label>Select Order</label>							
			            	    <select name="order_id">
				            	    <option value="">Selec Order</option>

			            	    	@foreach ($data as $id)
				            	    	<option value="{{ $id->order_no }}">{{ $id->order_no }}</option>
			            	    	@endforeach
			            	    </select>
			            	</div>
			            	<div class="changereq-input">
			            	    <label>Customer Name</label>
			            	    <input type="text" value="" disabled="" data-customer_name="customer_name">
			            	</div>
			            	<div class="changereq-input">
			                    <label>Request Type</label>		
			            	    <input type="text" value="" disabled="" data-product_type="product_type">
			                </div>
			                 <div class="changereq-input">
			                    <label>Package</label>	
			            	    <input type="text" value="" disabled="" data-product_name="product_name">	
			                </div>
			            	<div class="changereq-input">
			            	    <label>Business Name</label>
			            	    <input type="text" name="business_name_lead" value="">
			            	</div>
			                <div class="changereq-input">
			                    <label>Point of Contact </label>
			                    <input type="text" name="contact_lead" value="" >
			                </div>
			                <div class="changereq-input">
			                    <label>Phone no</label>
			                    <input type="text" name="phone_no_lead" value="" >
			                </div>
			                <div class="changereq-input">
			                    <label>Email Address</label>
			                    <input type="text" name="email_lead" value="">
			                </div>
                             <div class="changereq-input">
			                    <input type="hidden" name="order_id" value="">
			                </div>
			                <div class="changereq-input">
			                    <input type="hidden" name="lead_id" value="{{ Auth::user()->user_id}}">
			                </div>
			                <br>

			                <div class="changereq-textarea">
			                    <label>Comment</label>
			                    <textarea disabled="">
			                    </textarea>
			                </div>
				
	            @endif

			                <button type="submit" class="btn-changereq-submit-3">Submit</button>
			            </div>
			        </form>
	        </div>
		</div>
	</div>

	<script>
		jQuery(document).ready(function($) {	

			$('select[name="order_id"]').change(function(){

				// $("input[name='item_cost']").val("");
				// $("input[name='exclude_vat']").val("");
				// $("input[name='include_vat']").val("");
				var _id = $('select[name="order_id"]').val();
				$.ajax({
					url: '/get_order_data',
					type: 'POST',
					data: {
						"_token": "{{ csrf_token() }}",
						order_id: _id
					},
				})
				.done(function(response) {
					var response_data = jQuery.parseJSON(response);
					console.log(response_data.comment);

					$('input[name="purchased_date"]').attr('value', response_data.purchased_date);
					if(response_data.isAdmin == 3){
						var customer_type = 'Business';
					}else{
						var customer_type = 'Normal';					
					}
					$('input[data-customer_name="customer_name"]').attr('value', response_data.name);
					$('input[data-product_type="product_type"]').attr('value', response_data.product_type);
					$('input[data-product_name="product_name"]').attr('value', response_data.product_name);
					$('input[name="order_id"]').attr('value', response_data.order_id);
					$('textarea').val(response_data.comment);
				});					
				
			});

// 			$("input[name='item_cost']").keyup(function() {
				
// 				var cost = $(this).val();

// 				var quantity = $("input[name='quantity']").val();
				
// 				var vat = 10;

// 				console.log(cost);
// 				console.log(quantity);
// 				console.log(vat);

// 				var exclude_vat = quantity * cost ;

// 				$("input[name='exclude_vat']").val(exclude_vat);

// 				var include_vat = parseInt(vat) + parseInt(exclude_vat);

// 				$("input[name='include_vat']").val(include_vat);
				
// 			});
		});
	</script>

@endsection()