@extends('main')

@section('title', '')
@section('content')	
			<div id="ip-form" class="usa" style="">
	              <a href="/add_customer/{{ $check_customer }}"><button class="add_businees">Add Users</button></a>
					
					@if($check_customer == 3)
						@php
							$customer = "Business"
						@endphp
					@else
						@php
							$customer = "Normal"
						@endphp
					@endif

					<div class="frame3_top frame1-ip">
						<h3 style="margin-left: 2%;">{{ $customer }} Users</h3>
					    <div class="table-ip">
					        <table>
					            <thead>
					                <tr>
					                    <th>Name</th>
					                    <th>Email</th>
					                    <th>Status</th>
					                    <th>Action</th>
					                </tr>
					            </thead>
					        
					            <tbody>
					                     @foreach($data as $users)
				                <tr>
				                    <td>{{ $users->name }}</td>
				                    <td>{{ $users->email }}</td>
				                    <td>
        		                    	<label class="switch">
                            	          <input type="checkbox" class="warning">
                            	          <span class="slider round"></span>
                            	        </label>
					                </td>  
				                    <td><i class="fa fa-pencil edit_icon_2" aria-hidden="true"></i></td>                                   
				                </tr>
				                @endforeach
					            </tbody>
					        </table>
					    </div>	            
					</div>
				</div>


<script>
	jQuery(document).ready(function($) {
		var label = $(".frame3_top").find('h3').html();
		console.log(label);

		$(".navbar-label").find('label').html(label);

		$("title").html("PPC| "+label);
	});
</script>

@endsection()