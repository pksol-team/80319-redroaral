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
			            	    <input type="text" name="order_id" value="{{ $data->order_id }}">
			            	</div>
			            	<div class="changereq-input">
			            	    <label>Date Placed</label>
			            	    <input type="date" name="purchased_date" value="{{ $data->purchased_date }}" disabled="">			
			            	</div>
			            	{{-- <div class="changereq-input">
			            	    <label>Customer</label>			            	    
			            	    <input type="text" name="customer" value="{{ $data->isAdmin }}" disabled="">
			            	</div> --}}
			                <div class="changereq-input">
			            	    <label>Customer Name</label>
			            	    <input type="text" name="customer_name" value="{{ $data->name }}" disabled="">
			            	</div>
			                <div class="changereq-input">
			                    <label>Level</label>	
			            	    <input type="text" name="product_name" value="{{ $data->product_name }}" disabled="">	
			                </div>
			                <div class="changereq-input">
			                    <label>Request Type</label>		
			            	    <input type="text" name="product_type" value="{{ $data->product_type }}" disabled="">	
			                </div>
			                <div class="changereq-input">
			                    <label>Contact No.</label>
			                    <input type="text" name="phone" value="{{ $data->phone }}" disabled="">
			                </div>
			                <div class="changereq-input">
			                    <label>Email Address</label>
			                    <input type="text" name="email" value="{{ $data->email }}" disabled="">
			                </div>

			                <br>

			                <div class="changereq-input">
			                    <label>Comment</label>
			                    <textarea name="">{{ $data->comment }}
			                    </textarea>
			                </div>
			            	
			                {{-- <div class="changereq-input">
			                    <label>Quantity</label>
			                    <input type="text" name="quantity" value="{{ $data->quantity }}" disabled="">
			                </div>
		                  <div class="changereq-input">
			                    <label>Cost Per Rquest</label>
			                    <input type="text" name="item_cost" value=""  required="">
			                </div>
			                <div class="changereq-input">
			                    <label>Total(Exclude VAT)</label>
			                    <input type="text" name="exclude_vat" value="" required="">
			                </div>
			                <div class="changereq-input">
			                    <label>Total(Include VAT)</label>
			                    <input type="text" name="include_vat" value="" required="">
			                </div>  --}}
					@else

			         {{--        <button type="submit" class="btn-changereq-submit">Submit</button>
			            </div>
			        </form>
					<form id="contact-form" class="form-horizontal" method="POST" action="/update_order_lead">
		              	{{ csrf_field() }}	              	
			            <div class="row1-changereq-info"> --}}
			            	<div class="changereq-input">
			            	    <label>Select Order #</label>							
			            	    <select name="order_id">
				            	    <option value="">Selec Order #</option>

			            	    	@foreach ($data as $id)
				            	    	<option value="{{ $id->order_id }}">{{ $id->order_id }}</option>
			            	    	@endforeach
			            	    </select>
			            	</div>
			            	<div class="changereq-input">
			            	    <label>Date Placed</label>
			            	    <input type="date" name="purchased_date" value="" disabled="">			
			            	</div>
			            	{{-- <div class="changereq-input">
			            	    <label>Customer</label>
			            	    <input type="text" name="customer" value="" disabled="">
			            	</div> --}}
			            	<div class="changereq-input">
			            	    <label>Customer Name</label>
			            	    <input type="text" name="customer_name" value="" disabled="">
			            	</div>
			                <div class="changereq-input">
			                    <label>Level</label>	
			            	    <input type="text" name="product_name" value="" disabled="">	
			                </div>
			                <div class="changereq-input">
			                    <label>Request Type</label>		
			            	    <input type="text" name="product_type" value="" disabled="">
			                </div>
			                 <div class="changereq-input">
			                    <label>Contact No.</label>
			                    <input type="text" name="phone" value="" disabled="">
			                </div>
			                <div class="changereq-input">
			                    <label>Email Address</label>
			                    <input type="text" name="email" value="" disabled="">
			                </div>

			                <br>

			                <div class="changereq-input">
			                    <label>Comment</label>
			                    <textarea name="">
			                    </textarea>
			                    {{-- <input type="text" name="comment" value="" disabled=""> --}}
			                </div>
			                {{-- <div class="changereq-input">
			                    <label>Quantity</label>
			                    <input type="text" name="quantity" value="" disabled="">
			                </div>
		                  	<div class="changereq-input">
			                    <label>Cost Per Rquest</label>
			                    <input type="text" name="item_cost" value=""  required="">
			                </div>
			                <div class="changereq-input">
			                    <label>Total(Exclude VAT)</label>
			                    <input type="text" name="exclude_vat" value="" required="">
			                </div>
			                <div class="changereq-input">
			                    <label>Total(Include VAT)</label>
			                    <input type="text" name="include_vat" value="" required="">
			                </div>  --}}
				
	            @endif

			                <button type="submit" class="btn-changereq-submit-3">Submit</button>
			            </div>
			        </form>
	        </div>
		</div>
	</div>


	<!-- Button trigger modal -->


	<script>
		jQuery(document).ready(function($) {	

			$('select[name="order_id"]').change(function(){

				$("input[name='item_cost']").val("");
				$("input[name='exclude_vat']").val("");
				$("input[name='include_vat']").val("");
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
					// $('input[name="customer"]').attr('value', customer_type);
					$('input[name="customer_name"]').attr('value', response_data.name);
					$('input[name="product_type"]').attr('value', response_data.product_type);
					$('input[name="product_name"]').attr('value', response_data.product_name);
					$('input[name="phone"]').attr('value', response_data.phone);
					$('input[name="email"]').attr('value', response_data.email);
					$('textarea').val(response_data.comment);
					// $('input[name="quantity"]').attr('value', response_data.quantity);
				});					
				
			});

			$("input[name='item_cost']").keyup(function() {
				
				var cost = $(this).val();

				var quantity = $("input[name='quantity']").val();
				
				var vat = 10;

				console.log(cost);
				console.log(quantity);
				console.log(vat);

				var exclude_vat = quantity * cost ;

				$("input[name='exclude_vat']").val(exclude_vat);

				var include_vat = parseInt(vat) + parseInt(exclude_vat);

				$("input[name='include_vat']").val(include_vat);
				
			});
		});
	</script>

@endsection()