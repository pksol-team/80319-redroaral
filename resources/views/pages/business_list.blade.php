@extends('main')

@section('title', 'Requests')

@section('content')	

	<div id="ip-form" class="usa" style="">
		@if(Auth::user()->isAdmin == 2)
			<div class="frame1-pm">
	            <div class="btn-add-pm">
	                <a href="/business_list/pending"><button>Pending Request</button></a>
	            </div>
	            <div class="btn-view-pm">
	                <a href="/business_list/completed"><button>Completed Request</button></a>
	            </div>
	        </div>
        @elseif(Auth::user()->isAdmin == 1 && $user)
        	<div class="frame1-pm">
            <div class="btn-add-pm">
                <a href="/lead_all_request/pending/{{ $user_id }}"><button>Pending Request</button></a>
            </div>
            <div class="btn-view-pm">
                <a href="/lead_all_request/completed/{{ $user_id }}"><button>Completed Request</button></a>
            </div>
        </div>
        @else
        	<div class="frame1-pm">
            <div class="btn-add-pm">
                <a href="/customer_all_leads/pending/{{ $user_id }}"><button>Pending Request</button></a>
            </div>
            <div class="btn-view-pm">
                <a href="/customer_all_leads/completed/{{ $user_id }}"><button>Completed Request</button></a>
            </div>
        @endif
	        <div class="frame1-ip">
	        	<h3 style="margin-left: 2%;">{{ $data }}</h3>
	            <div class="table-ip">
			    	<table id="example" class="table table-striped table-bordered" style="width:100%">

	                {{-- <table> --}}
	                    <thead>
	                        <tr>
	                            <th>Date</th>
	                            <th>RequestType</th>
	                            <th>Price Per Lead</th>
	                            <th>Quantity</th>
	                            @if ($data == 'Completed Request')
		                            <th>Total(excl VAT)</th>
		                            {{-- <th>Total(inci VAT)</th> --}}
	                            @endif
	                            <th>Leads</th>
	                            {{-- <th>INVOICE</th> --}}
	                            <th>Payment Status</th>
	                        </tr>
	                    </thead>
	                
	                    <tbody>
	                        	@foreach($request_data as $requsts)

	                        <tr>     
	                         <td>{{ $requsts->purchased_date }}</td>
		                    	    <td>{{ $requsts->products->product_type }}</td>
		                    	    <td>{{ $requsts->products->price }}</td>
		                    	    <td>{{ $requsts->quantity }}</td>
	                            	@if ($data == 'Completed Request')
			                    	    <td>&#163; {{ $requsts->exclude_vat }}</td>
			                    	    {{-- <td>&#163; {{ $requsts->include_vat }}</td> --}}
			                    	@endif
		                    	    <td><a href="/view_request/{{ $requsts->order_id }}"><button type="" class="view_btn">View</button></a></td>
	                            	{{-- <td><button type="" class="view_btn">Download</button></td> --}}
		                    	    <td>{{ $requsts->payment_status }}
		                    	    {{-- 	<i class="fa fa-pencil edit_icon" aria-hidden="true"></i> --}}
		                    	    </td>		                    	    
	                        </tr>
	                            @endforeach                                        

	                    </tbody>
	                </table>
	            </div>	            
	        </div>
	    </div>

	    <script>
	    	
	    	jQuery(document).ready(function($) {
	    		var label = $(".frame1-ip").find('h3').html();
	    		console.log(label);

	    		$(".navbar-label").find('label').html(label);

	    		$("title").html("PPC| "+label);
	    	});
	    	
	    </script>
@endsection()