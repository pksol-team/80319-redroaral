@extends('main')

@section('title', 'Configuration')

@section('content')	

	<div id="dashboard-form" class="usa">
		<div id="changerequest-form-2" class="usa" style="">
	        <div class="frame2-changereq" id="frame2-changereq">
	            <div class="changereq-title">
	                <label>Configuration</label>
	            </div>
				{{-- <form id="contact-form" class="form-horizontal" method="POST" action="/update_product"> --}}
	              	{{ csrf_field() }}
		            <div class="row1-changereq-info">

	                	<div class="changereq-input vat_data" style="width: 45.3%;" >
	                	    <label>VAT</label>
	                	    
	                	    <input type="hidden" name="id" value="{{ $vat->id }}" disabled="">
	                	    
	                	    <input type="text" name="vat" value="{{ $vat->vat }}" disabled="">

	                	</div>
	                		<button type="submit" class="btn btn-primary">Edit</button>

	                		<button type="submit" class="btn btn-success">Update</button>

	                	<br>
	                	<table class="product_data">
	                		<thead>
		                		<tr>
		                			<th>Request Type</th>
		                			<th>Package</th>
		                			<th>Cost Per Lead</th>
		                		</tr>
	                		</thead>
							<tbody>
							@foreach ($data as $products)
								<tr>			
				                    <input type="hidden" name="product_id" value="{{ $products->id }}" >

	                    			<td>
	                    				
				                    <input type="text" name="product_type" value="{{ $products->product_type }}" disabled="">
	                    			</td>

	                    			<td>
				                    <input type="text" name="product_name" value="{{ $products->product_name }}" disabled="">
	                    				
	                    			</td>

				                    <td>
				                    	
				                    <input type="text" name="item_cost" value="{{ $products->price }}" disabled="">
				                    </td>

				                    <td>
					                    <button type="submit" class="edit_lead">Edit</button>
				                		<button type="submit" class="update_lead">Update</button>	
				                    </td>
				                    {{-- <div class="changereq-input-3 product_data">
				                    </div>
				                    <div class="changereq-input-3 product_data">
				                    </div>
				                    <div class="changereq-input-3 product_data">
				                    </div> --}}
			                    	

								</tr>
			                    @endforeach
							</tbody>
	                	</table>
	                   {{--  <div class="changereq-input-3">
	                        <label>Request Type</label>
	                    </div>
	                    <div class="changereq-input-3">
	                        <label>Package</label>								
	                    </div>
	                    <div class="changereq-input-3">
	                        <label>Cost Per Lead</label>
	                    </div>
	                    		 @foreach ($data as $products)

				
	                    
				                    <input type="hidden" name="id" value="{{ $products->id }}">

				                    <div class="changereq-input-3 product_data">
				                        <input type="text" name="product_type" value="{{ $products->product_type }}" disabled="">
				                    </div>
				                    <div class="changereq-input-3 product_data">
				                        <input type="text" name="product_name" value="{{ $products->product_name }}" disabled="">
				                    </div>
				                    <div class="changereq-input-3 product_data">
				                        <input type="text" name="item_cost" value="{{ $products->price }}" disabled="">
				                    </div>
			                    	
				                    <button type="submit" class="edit_lead">Edit</button>

			                		<button type="submit" class="update_lead">Update</button>	                    	
			                    @endforeach
	                    --}}

		                {{-- <button type="submit" class="btn-changereq-submit-2">Update</button> --}}
		            </div>
		        {{-- </form> --}}
	        </div>
		</div>
	</div>	


<script>
		
	jQuery(document).ready(function($) {
		$(document).on('click', '.edit_vat', function(event) {

			$("div.vat_data").find('input').removeAttr('disabled');

		});

		$(document).on('click', '.update_vat', function(event) {
			
			var vat_id = $("input[name='id']").val();
			var vat_value = $("input[name='vat']").val();

			$.ajax({
				url: '/update_product',
				type: 'POST',
				data: {
						"_token": "{{ csrf_token() }}",
						id: vat_id,
						value: vat_value,
						table: 'product_vat'
					},
			})
			.done(function() {
				location.reload();
			});
			

		});




		$(document).on('click', '.edit_lead', function(event) {

			$(this).closest('tr').find('input').removeAttr('disabled');

		});

		$(document).on('click', '.update_lead', function(event) {
			
			var product_id = $(this).closest('tr').find("input[name='product_id']").val();
			var product_type = $(this).closest('tr').find("input[name='product_type']").val();
			var product_name = $(this).closest('tr').find("input[name='product_name']").val();
			var item_cost = $(this).closest('tr').find("input[name='item_cost']").val();

			console.log(product_id, product_type, product_name, item_cost);

			$.ajax({
				url: '/update_product',
				type: 'POST',
				data: {
						"_token": "{{ csrf_token() }}",
						id: product_id,
						type: product_type,
						name: product_name,
						cost: item_cost,
						table: 'products'
					},
			})
			.done(function() {
				location.reload();
			});
			

		});

	});

</script>
@endsection()