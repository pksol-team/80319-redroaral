@extends('main')

@section('title', 'Products')


@section('content')	


	<div id="dashboard-form" class="usa">
				<div class="frame1-ip">
		            <div class="table-ip">
		            	<table id="example" class="table table-striped table-bordered" style="width:100%">
		            	        <thead>
		            	            <tr>
		            	                <th>Product Id</th>
			                            <th>Request Type</th>
			                            <th>Level</th>
			                            <th>Cost</th>
			                            <th>VAT</th>
			                            <th>Update</th>
		            	            </tr>
		            	        </thead>
		            	   
		            	        <tbody>
		            	        	@foreach($data as $products)
			            	        	<tr>                 	
				                    	    <td>{{ $products->id }}</td>
				                    	    <td>{{ $products->product_type }}</td>
				                    	    <td>{{ $products->product_name }}</td>
				                    	    <td>{{ $products->price }}</td>
				                    	    <td>{{ $products->vat }}</td>
		                            		<td><a href="/update_product/{{ $products->id }}"><button type="submit" class="view_btn update_prduct">Edit</button></a></td>
				                    	</tr>
		                    		@endforeach					            	  
		            	        </tbody>
		            	    </table>
		            </div>	            
				</div>
	</div>


	{{-- <script>
		
		jQuery(document).ready(function($) {
			$(".update_prduct").click(function(event) {

				var product_price = $("input[name='price']").val();
				
				var product_vat = $("input[name='vat']").val();

				var product_id = $("input[name='price']").attr('data-id');
				console.log(product_id);

				$.ajax({
					url: '/update_product',
					type: 'POST',
					data: {
						"_token": "{{ csrf_token() }}",
						price: product_price,
						vat: product_vat,
						id: product_id
					},
				})
				.done(function(response) {
					// location.reload();
				});
				
			});
		});

	</script> --}}
@endsection
