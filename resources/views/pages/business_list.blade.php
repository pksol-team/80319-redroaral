@extends('main')

@section('title', 'Requests')

@section('content')	

	<div id="ip-form" class="usa" style="">
		<!--@if(Auth::user()->isAdmin == 1)-->
		<!--<div class="frame1-pm">-->
  <!--          <div class="btn-add-pm">-->
  <!--              <a href="/customer_all_leads/pending/{{ $user_id }}"><button>Pending Request</button></a>-->
  <!--          </div>-->
  <!--          <div class="btn-view-pm">-->
  <!--              <a href="/customer_all_leads/completed/{{ $user_id }}"><button>Completed Request</button></a>-->
  <!--          </div>-->
  <!--          </div>-->
  <!--     @elseif(Auth::user()->isAdmin == 1 && $user)-->
  <!--      	<div class="frame1-pm">-->
  <!--          <div class="btn-add-pm">-->
  <!--              <a href="/lead_all_request/pending/{{ $user_id }}"><button>Pending Request</button></a>-->
  <!--          </div>-->
  <!--          <div class="btn-view-pm">-->
  <!--              <a href="/lead_all_request/completed/{{ $user_id }}"><button>Completed Request</button></a>-->
  <!--          </div>-->
  <!--      </div>-->
  <!--      @endif-->
   @php
                $url = url()->current() ;
                @endphp
  @if($user == 'customer')
		<div class="frame1-pm">
            <div class="btn-add-pm">
               
                <a href="/customer_all_leads/pending/{{ $user_id }}"><button class="{{ strpos($url, 'pending') ? 'pending_complete_active' : 'pending_complete_deactive' }}">Pending Request</button></a>
            </div>
            <div class="btn-view-pm">
                <a href="/customer_all_leads/completed/{{ $user_id }}"><button class="{{ strpos($url, 'completed') ? 'pending_complete_active' : 'pending_complete_deactive' }}">Completed Request</button></a>
            </div>
            </div>
       @elseif($user == 'lead')
        	<div class="frame1-pm">
            <div class="btn-add-pm">
                <a href="/lead_all_request/pending/{{ $user_id }}"><button class="{{ strpos($url, 'pending') ? 'pending_complete_active' : 'pending_complete_deactive' }}">Pending Submitted Leads</button></a>
            </div>
            <div class="btn-view-pm">
                <a href="/lead_all_request/completed/{{ $user_id }}"><button class="{{ strpos($url, 'completed') ? 'pending_complete_active' : 'pending_complete_deactive' }}">Completed Submitted Leads</button></a>
            </div>
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
		                    	    <td>&#163; {{ $requsts->products->price }}</td>
		                    	    <td>{{ $requsts->quantity }}</td>
	                            	@if ($data == 'Completed Request')
			                    	    <td>&#163; {{ $requsts->exclude_vat }}</td>
			                    	    {{-- <td>&#163; {{ $requsts->include_vat }}</td> --}}
			                    	@endif
		                    	    <td><a href="/view_request/{{ $requsts->order_id }}"><button type="" class="view_btn">View</button></a></td>
		                    	    <td>
		                    	        {{ $requsts->payment_status }}
		                    	        @if(Auth::user()->isAdmin == 1)
		                    	            <a href="/edit_request/{{ $requsts->order_id }}">
			            	    		<i class="fa fa-pencil edit_icon" aria-hidden="true"></i></a>
		                    	        @endif
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
	    		
	    		
	    		
	   // 		$(document).on('click', '.pending', function(event) {
	   // 		 //   $(this).attr('class', 'pending_complete_active');
	   // 		 //   $(".complete").attr('class', 'pending_complete_deactive');
	    		    
				//   $(this).addClass("pending_complete_active");
				//   $(this).removeClass("pending_complete_deactive");
				//   $(".complete").addClass("pending_complete_deactive");
				//   $(".complete").removeClass("pending_complete_active");
				   
				// });
				
				// $(document).on('click', '.complete', function(event) {
				//     //  $(this).attr('class', 'pending_complete_active');
	   // 		 //   $(".pending").attr('class', 'pending_complete_deactive');
				//   $(this).addClass("pending_complete_active");
				//   $(this).removeClass("pending_complete_deactive");
				  
				//   $(".pending").removeClass("pending_complete_active");
				//   $(".pending").addClass("pending_complete_deactive");
				  
				// });
	    	});
	    	
	    </script>
@endsection()