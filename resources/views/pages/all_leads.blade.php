@extends('main')

@section('title', 'My Submitted Leads')

@section('content')	

	<div id="ip-form" class="usa" style="">
		
	        <div class="frame1-ip">
	        	<h3 style="margin-left: 2%;">My Submitted Leads</h3>
	            <div class="table-ip">
			    	<table id="example" class="table table-striped table-bordered" style="width:100%">
	                    <thead>
	                        <tr>
	                            <th>Date</th>
	                            <th>RequestType</th>
	                            <th>Price Per Lead</th>
	                            <th>Quantity</th>	                            
		                        <th>Total(excluding VAT)</th>		                        
	                            <th>Leads</th>
	                            <th>Payment Status</th>
	                            <th>Lead Status</th>
	                        </tr>
	                    </thead>
	                
	                    <tbody>
	                        	@foreach($data as $requsts)

	                        <tr>     
	                         <td>{{ $requsts->purchased_date }}</td>
		                    	    <td>{{ $requsts->products->product_type }}</td>
		                    	    <td>{{ $requsts->products->price }}</td>
		                    	    <td>{{ $requsts->quantity }}</td>
		                    	    <td>&#163; {{ $requsts->exclude_vat }}</td>
		                    	    <td><a href="/view_request/{{ $requsts->order_id }}"><button type="" class="view_btn">View</button></a></td>
		                    	    <td>{{ $requsts->payment_status }}
		                    	    <td>{{ $requsts->status }}</td>
		                    	    
	                            	{{-- <td><button type="" class="view_btn">Download</button></td> --}}
		                    	    {{-- 	<i class="fa fa-pencil edit_icon" aria-hidden="true"></i> --}}
		                    	    </td>		                    	    
	                        </tr>
	                            @endforeach                                        

	                    </tbody>
	                </table>
	            </div>	            
	        </div>
	    </div>

	 
@endsection()