@extends('main')

@section('title', 'Add Ticket')

@section('content')	

	<div id="ip-form" class="usa" style="">
	    <div id="changerequest-form" class="usa" style="">
	        <div class="frame2-changereq" id="frame2-changereq">
	            <div class="changereq-title">
	                <label>Add Ticket</label>
	            </div>
				<form id="contact-form" class="form-horizontal" method="POST" action="/add_ticket_data">
	              	{{ csrf_field() }}
		            <div class="row1-changereq-info">
		            	<div class="changereq-input">
		            	    <label>Type</label>
		            	    <input type="text" name="ticket_type" value="">
		            	</div>
		                <div class="changereq-input">
		                    <label>Source</label>								
		                    <input type="text" name="ticket_source" value="">
		                </div>
		                <div class="changereq-input">
		                    <label>Subject</label>
		                    <input type="text" name="ticket_title" value="">
		                </div>
		                <div class="changereq-input">
		                    <input type="hidden" name="user_id" value="{{ Auth::user()->user_id }}">	                
		                
		                    <input type="hidden" name="date" value="{{ date('Y-m-d h:i:s')}}">
		                </div>  
		                
			           

			            
			            
			            <!--<input type="hidden" name="order_no" value="2089246222">-->

		                <button type="submit" class="btn-changereq-submit">Submit Ticket</button>
		            </div>
		        </form>
	        </div>
		</div>
	</div>
@endsection()