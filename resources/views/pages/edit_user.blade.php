@extends('main')

@section('title', 'Edit User')
@section('content')	
	<div id="dashboard-form" class="usa">
		<div id="changerequest-form" class="usa" style="">
	        <div class="frame2-changereq" id="frame2-changereq">
	            <div class="changereq-title">
	            	@if ($data->isAdmin == 2)
	            	@php
	            		$user = 'Lead Generator';
	            	@endphp
	            	@else
		            	@php
		            		$user = 'Customer';
		            	@endphp	            	
	            	@endif
	                <label>Edit {{ $user }}</label>
	            </div>
				{{-- <form id="contact-form" class="form-horizontal" method="POST" action="/add_lead_generator"> --}}
					<form method="POST" action="/update_user_info">
	              	{{ csrf_field() }}
		            <div class="row1-changereq-info">
		                <div class="changereq-input">
		                    <label>First Name</label>		                    
		                    <input type="text" name="name" value="{{ $data->name }}" required="">
		                </div>
		                <div class="changereq-input">
		                    <label>Last Name</label>
		                    <input type="text" name="last_name" value="{{ $data->last_name }}" required="">
		                </div>		               
		                <div class="changereq-input">
		                    <label>Email</label>
		                    <input type="text" name="email" value="{{ $data->email }}" readonly="">
		                </div>
		                <div class="changereq-input">
		                    <label>Password</label>
		                    <input type="text" name="" value="*************" readonly="">
		                </div>
		                <div class="changereq-input">
		                    <label>Phone</label>
		                    <input type="text" name="phone" value="{{ $data->phone }}" required="">
		                </div>
		                <div class="changereq-input">
		                    <label>Status</label>
		                    <select name="status">
		                        @if($data->status == 'Deactive')
		                            <option value="Deactive" selected>Deactive</option>
		                            <option value="Active">Active</option>
		                        @else
		                            <option value="Deactive">Deactive</option>
		                            <option value="Active" selected>Active</option>
		                        @endif
		                    </select>
		                    <!--<input type="text" name="status" value="{{ $data->status }}">-->
		                </div>
		                <input type="hidden" name="user_id" value="{{ $data->user_id}}">
		                <input type="hidden" name="isAdmin" value="{{ $data->isAdmin}}">
		                <button type="submit" class="btn-changereq-submit">Update {{ $user }}</button>
		            </div>
		        </form>
	        </div>
		</div>
	</div>

@endsection()