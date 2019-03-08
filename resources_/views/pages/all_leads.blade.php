@extends('main')

@section('title', 'My Submitted Leads')

@section('content')	

{{-- <div id="ex1" class="modal">
  	<div class="changereq-input">
	    <label>Date Placed</label>
	    <input type="text" name="purchased_date" value="{{ date('Y-m-d') }}" >					
	</div>
</div> --}}

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
		                        <th>Total(excl VAT)</th>		                        
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
		                    	    <td>
		                    	    	{{-- <p><a href="#ex1" rel="modal:open">Open Modal</a></p> --}}
		                    	    	<a href="/view_request/{{ $requsts->order_id }}"><button type="" class="view_btn">View</button></a>
	

								</td>
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



<!-- Link to open the modal -->


 {{-- <div id="ex1" class="modal">
  <p>Thanks for clicking. That felt good.</p>
  <a href="#" rel="modal:close">Close</a>
</div> --}}



@endsection()