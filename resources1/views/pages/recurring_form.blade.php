@extends('main')

@section('title', 'Recurring Form')
@section('content')	
	<div id="dashboard-form" class="usa">
		<div id="changerequest-form" class="usa" style="">
	        <div class="frame2-changereq" id="frame2-changereq">
	            <div class="changereq-title">
	                <label>New Recurring Form</label>
	            </div>
				<form id="contact-form" class="form-horizontal" method="POST" action="/add_customer_order">
	              	{{ csrf_field() }}
		            <div class="row1-changereq-info">
		            	<div class="changereq-input">
		            	    <label>Start Date</label>
		            	    <input type="text" class="datepicker-starttime" name="purchased_date" value=""/>
		            	    <!--<input type="text" name="purchased_date" value="{{ date('Y-m-d') }}" >							-->
		            	</div>
		                <div class="changereq-input">
		                    <label>Request Type</label>								
		                    <select name="product_type">
		                         <option value="">Select Request Type</option>
		                    	 <option value="Lead">Lead</option>
		                    	 <option value="Sales">Sales</option>
		                    </select>
		                </div>
		                <div class="changereq-input">
		                    <label>Level</label>								
		                    <select name="product_name">
		                         <option value="">Select Package</option>
		                    	 <option value="Bronze">Bronze</option>
		                    	 <option value="Silver">Silver</option>
		                    	 <option value="Gold">Gold</option>
		                    </select>
		                </div>
		                <div class="changereq-input">
		                    <label>Quantity</label>
		                    <input type="text" name="quantity" required="">
		                </div>
		                <div class="changereq-input">
		                    <label>Cost Per Request</label>
		                    <input type="text" name="item_cost" value="" readonly="">
		                </div>
		                <div class="changereq-input">
		                    <label>Total(excluding VAT)</label>
		                    <input type="text" name="exclude_vat" value="" readonly="">
		                </div>
		                <div class="changereq-input">
		                    <label>How Often</label>								
		                    <select name="product_name">
		                    	 <option value="">Select Option</option>
		                    	 <option value="Weekly">Weekly</option>
		                    	 <option value="Every Two Weeks">Every Two Weeks</option>
		                    	 <option value="Monthly">Monthly</option>
		                    </select>
		                </div>
		                <div class="changereq-textarea">
		                    <label>Comment</label>
		                    <textarea name="comment" required=""></textarea>
		                </div>               
		                <input type="hidden" name="product_id" value="">	 

		                <input type="hidden" name="vat" value="">	                
		                
                        <input type="hidden" name="include_vat" value="">

		                       
		                <button type="submit" class="btn-changereq-submit">Submit</button>
		            </div>
		        </form>
				{{-- <form id="contact-form" class="form-horizontal" method="POST" action="/add_customer_order">
	              	{{ csrf_field() }}
		            <div class="row1-changereq-info">
		                <div class="changereq-input">
		                    <label>Request Type</label>								
		                    <select name="product_type">
		                    	 <option value="Lead">Lead</option>
		                    	 <option value="Sales">Sales</option>
		                    </select>
		                </div>
		                <div class="changereq-input">
		                    <label>Request Name</label>								
		                    <select name="product_name">
		                    	 <option value="Bronze">Bronze</option>
		                    	 <option value="Silver">Silver</option>
		                    	 <option value="Gold">Gold</option>
		                    </select>
		                </div>
		                <div class="changereq-input">
		                    <label>Cost Per Rquest</label>
		                    <input type="text" name="item_cost" value="">
		                </div>
		                <div class="changereq-input">
		                    <label>Quantity (Available Quantity) :<b class="quantity"></b></label>
		                    <input type="text" name="quantity">
		                </div>	
		                <input type="hidden" name="product_id" value="">	                
		                <button type="submit" class="btn-changereq-submit">Submit</button>
		            </div>
		        </form> --}}
	        </div>
		</div>
	</div>

<script>
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
					$('input[name="item_cost"]').attr('value', response_data.price);
					// $('b.quantity').html(response_data.price);
					$('input[name="product_id"]').attr('value', response_data.id);
					$('input[name="vat"]').attr('value', response_data.vat);
				});					
				
			});

			$("input[name='quantity']").keyup(function() {
				var quantity = $(this).val();

				var cost = $("input[name='item_cost']").val();
				
				var vat = $("input[name='vat']").val();

				var exclude_vat = quantity * cost ;

				$("input[name='exclude_vat']").attr('value', exclude_vat);

				var include_vat = parseInt(vat) + parseInt(exclude_vat);

				$("input[name='include_vat']").attr('value', include_vat);
				
			});
		});
	</script>

@endsection()