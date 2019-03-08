@extends('main')

@section('title', 'Lead Requests')

@section('content')	

	<div id="ip-form" class="usa" style="">		
	        <div class="frame3-ip">
	        	<h3 style="margin-left: 2%;">Lead Request</h3>
	        	{{-- @php
	        		@dump($data)
	        	@endphp --}}
    			<form id="contact-form" class="form-horizontal">
    	            <div class="row1-changereq-info">
    	            	<div class="changereq-input">
    	            	    <label>Order id</label>
    	            	    <input type="text" readOnly="" value="{{ $data->order_id }}" >							
    	            	</div>
    	                <div class="changereq-input">
    	                    <label>Order #</label>							
    	            	    <input type="text" readOnly="" value="{{ $data->products->product_type }}" >				
    	                </div>
    	                <div class="changereq-input">
    	                    <label>Customer Name</label>						
    	            	    <input type="text" readOnly="" value="{{ $data->users->name }}" >				
    	                </div>
    	                <div class="changereq-input">
    	                    <label>Customer Email</label>						
    	            	    <input type="text" readOnly="" value="{{ $data->users->email }}" >				
    	                </div>
    	                <div class="changereq-input">
    	                    <label>Request Type</label>							
    	            	    <input type="text" readOnly="" value="{{ $data->products->product_type }}" >				
    	                </div>
    	                <div class="changereq-input">
    	                    <label>Package</label>							
    	            	    <input type="text" readOnly="" value="{{ $data->products->product_name }}" >				
    	                </div>
    	                <div class="changereq-input">
    	                    <label>Purchased Date</label>						
    	            	    <input type="text" readOnly="" value="{{ $data->purchased_date }}" >				
    	                </div>
    	                <div class="changereq-input">
    	                    <label>Quantity</label>							
    	            	    <input type="text" readOnly="" value="{{ $data->quantity }}" >				
    	                </div>
    	                <div class="changereq-input">
    	                    <label>Total</label>							
    	            	    <input type="text" readOnly="" value="{{ $data->include_vat }}" >				
    	                </div>
    	                <div class="changereq-input">
    	                    <label>Payment Status</label>						
    	            	    <input type="text" readOnly="" value="{{ $data->payment_status }}" >				
    	                </div>
    	            </div>
    	        </form>       
	        </div>
	</div>



{{-- <script>
        
    jQuery(document).ready(function($) {
        $.ajax({
            url: '/check_date',
            type: 'POST',           
            data: {
                'Auth' : 'true'
            },
        })
        .done(function(response) {
            console.log(response);
        });
        
    });                 

</script> --}}
	  @endsection()