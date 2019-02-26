@extends('main')

@section('title', 'Edit Leads')
@section('content')	
	<div id="dashboard-form" class="usa">
		<div id="changerequest-form" class="usa" style="">
	        <div class="frame2-changereq" id="frame2-changereq">
	            <div class="changereq-title">
	                <label>Edit Leads</label>
	            </div>
				<form id="contact-form" class="form-horizontal" method="POST" action="/product_edited">
	              	{{ csrf_field() }}
		            <div class="row1-changereq-info">
		            	<div class="changereq-input">
		            	    <label>Request Type</label>
		            	    <input type="date" name="" value="{{ $data->product_type }}" disabled="">							
		            	</div>
		                <div class="changereq-input">
		                    <label>Level</label>							
		            	    <input type="date" name="" value="{{ $data->product_name }}" disabled="">	
		                </div>
		                <div class="changereq-input">
		                    <label>Vat</label>
		                    <input type="text" name="vat" value="{{ $data->vat }}" >
		                </div>	
		                <div class="changereq-input">
		                    <label>Price</label>
		                    <input type="text" name="price" value="{{ $data->price }}" >
		                </div>
		                <input type="hidden" name="id" value="{{ $data->id }}">
		                <button type="submit" class="btn-changereq-submit">Update</button>
		            </div>
		        </form>
	        </div>
		</div>
	</div>

	{{-- <script>
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
 --}}
@endsection()