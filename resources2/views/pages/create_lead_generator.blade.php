@extends('main')

@section('title', 'New Lead Generator')
@section('content')	
	<div id="dashboard-form" class="usa">
		<div id="changerequest-form" class="usa" style="">
	        <div class="frame2-changereq" id="frame2-changereq">
	            <div class="changereq-title">
	                <label>Add New Lead Generator</label>
	            </div>

				{{-- <form id="contact-form" class="form-horizontal" method="POST" action="/add_lead_generator"> --}}
					 <form method="POST" action="{{ route('register') }}">
	              	{{ csrf_field() }}
		            <div class="row1-changereq-info">
		                <div class="changereq-input">
		                    <label>First Name</label>
		                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">
		                     @if ($errors->has('name'))
		                         <span class="invalid-feedback" role="alert">
		                             <strong>{{ $errors->first('name') }}</strong>
		                         </span>
		                     @endif
		                    {{-- <input type="text" name="first_name"> --}}
		                </div>
		                <div class="changereq-input">
		                    <label>Last Name</label>		                    
		                    <input type="text" name="last	_name">
		                </div>
		                <div class="changereq-input">
		                    <label>Email</label>
		                   <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="E-Mail Address">
		                    @if ($errors->has('email'))
		                        <span class="invalid-feedback" role="alert">
		                            <strong>{{ $errors->first('email') }}</strong>
		                        </span>
		                    @endif
		                </div>
		                <div class="changereq-input">
		                    <label>Phone</label>
		                    <input type="text" name="phone">
		                </div>
		                <div class="changereq-input">
		                    <label>Password</label>
		                   <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
		                </div>
		                <div class="changereq-input">
		                    <label>Confirm Password</label>
		                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
		                </div>
		                <input type="hidden" name="isAdmin" value="2">

		                <button type="submit" class="btn-changereq-submit">Add Lead Generator</button>
		            </div>
		        </form>
	        </div>
		</div>
	</div>

@endsection()