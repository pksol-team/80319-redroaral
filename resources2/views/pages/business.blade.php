@extends('main')

@section('title', 'Business')
@section('content')	

	<div id="dashboard-form" class="usa">
        {{-- <button class="add_businees">Add Business</button> --}}
	    <div class="frame1-dash frame2_top">
	    	@if($data)
		    	@foreach ($data['request'] as $requests)
			    	{{-- <a href="/business_list/completed"> --}}
						<div class="column-dash inlineBlock">					
				            <div class="title-col-dash">	    		
				                <label>{{ $requests['user'] }}</label>
				            </div>

				           {{--  <div class="money_circle">
				            	<p>Money Owned</p>
				            	<p>&#163;5464</p>
				            </div> --}}
							<div class="row1-dash-info_2">
				                <div class="column-dash-label">
				                    <label>Pending Lead Request</label>
				                </div>
				                <div class="column-dash-label">
				                    <label>Completed Lead Request</label>
				                </div>  
				                <div class="column-dash-label">
				                    <label>Pending Sales Request</label>
				                </div>
				                <div class="column-dash-label">
				                    <label>Completed Sales Request</label>
				                </div>    
				            </div>	

				            <div class="row2-dash-count_2">
				                <div class="column-dash-count">
				                    <label>{{ $requests['pending_lead'] }}</label>
				                </div>
				                <div class="column-dash-count">
				                    <label>{{ $requests['completed_lead'] }}</label>
				                </div>
				                <div class="column-dash-count">
				                    <label>{{ $requests['pending_sales'] }}</label>
				                </div>
				                <div class="column-dash-count">
				                    <label>{{ $requests['completed_sales'] }}</label>
				                </div>	               
				            </div>
				            <a href="/customer_all_leads/pending/{{ $requests['user_id'] }}"><button class="view-more">VIEW MORE</button></a>
						</div>
					{{-- </a> --}}
		    	@endforeach
	    	@endif
	    </div>
	    
	</div>

@endsection()