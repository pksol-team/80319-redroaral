@extends('main')

@section('title', 'Submitted Leads')

@section('content')	

	<div id="ip-form" class="usa" style="">
		
	        <div class="frame1-ip">
	        	<h3 style="margin-left: 2%;">Submitted Leads</h3>
	            <div class="table-ip">
			    	<table id="example" class="table table-striped table-bordered" style="width:100%">
	                    <thead>
	                        <tr>
	                            <th>Lead # </th>
	                            <th>Date</th>
	                            <th>RequestType</th>
	                            <th>Price Per Lead</th>
		                        <!--<th>Total(excluding VAT)</th>		                        -->
	                            <!--<th>Leads</th>-->
	                            <!--<th>Payment Status</th>-->
	                            <th>Lead Status</th>
	                        </tr>
	                    </thead>
	                
	                    <tbody>
	                        @for($i = 1; $i <= $count; $i++)
	                        <tr>     
	                            <td>{{ $i }}</td>
                                <td>{{ $data->purchased_date }}</td>
	                    	    <td>{{ $data->products->product_type }}</td>
	                    	    <td>{{ $data->products->price }}</td>
	                    	    <!--<td>&#163; {{ $data->exclude_vat }}</td>-->
	                    	    <!--<td><a href="/view_request/{{ $data->order_id }}"><button type="" class="view_btn">View</button></a></td>-->
	                    	    <!--<td>{{ $data->payment_status }}-->
	                    	    <td>{{ $data->status }}</td>
	                    	    </td>		                    	    
	                        </tr>
	                        @endfor
	                                                        
	                 

	                    </tbody>
	                </table>
	            </div>	            
	        </div>
	    </div>

	 
@endsection()