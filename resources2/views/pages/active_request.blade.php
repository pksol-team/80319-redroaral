	@extends('main')

	@section('title', 'Activate Requests')
	@section('content')	
		<div id="ip-form" class="usa" style="">
			<div class="frame1-ip">
				<h3 style="margin-left: 2%;">Activate Requests</h3>
			    <div class="table-ip">
			    	<table id="example" class="table table-striped table-bordered" style="width:100%">
			        {{-- <table> --}}
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
			            		@foreach($data as $active_requsts)

			            	<tr>                        	
			            	    <td>{{ $active_requsts->users->name }}</td>
			            	    <td>{{ $active_requsts->purchased_date }}</td>
			            	    <td>{{ $active_requsts->order_id }}</td>
			            	    <td>{{ $active_requsts->products->product_type }}</td>
			            	    <td>{{ $active_requsts->products->product_name }}</td>
			            	    <td>{{ $active_requsts->quantity }}</td>
			            	    <td>{{ $active_requsts->products->price }}</td>
			            	    <td>&#163; {{ $active_requsts->exclude_vat }}</td>
			            	    
			            	    	<td style="text-align: center"><a href="/edit_request/{{ $active_requsts->order_id }}">
			            	    		<i class="fa fa-pencil edit_icon" aria-hidden="true"></i></a>
			            	    	</td>	
			            	    
			            	</tr>
			            	    @endforeach
			                {{-- <tr>
			                    <td><b>Business Name</b></td>
			                    <td><b>Lead Request</b></td>
			                    <td><b>21</b></td>
			                    <td><b>&#163;55</b></td>
			                    <td><b>J&#163;25.00</b></td>
			                    <td><b>J&#163;25.00</b></td>		                    
			                    <td><b>Paid</b></td>
			                    <td><b>J&#163;25.00</b></td>		                    
			                    <td><b>J&#163;25.00</b></td>
			                    @if(Auth::user()->isAdmin == 1)
			                    <td><i class="fa fa-pencil edit_icon" aria-hidden="true"></i></td>
			                    @else
			                    <td><p class='plus_sign'>+</p></td>
			                    @endif
			                </tr> --}}
			            </tbody>
			        </table>
			    </div>	            
			</div>
		</div>
	@endsection()



