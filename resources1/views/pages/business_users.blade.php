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
        		                    @if($users->status == 'Active')
						                    	<label class="switch">
						                    	    <input class="switch-input" type="checkbox" checked data-user_id="{{ $users->user_id }}"/>
						                    	    <span class="slider round switch-label" data-on="Active" data-off="Deactive"></span> 
    				                    		</label>
				                    		@else
				                    			<label class="switch">
    				                    		  <input class="switch-input" type="checkbox" data-user_id="{{ $users->user_id }}">
    				                    		  <span class="slider round switch-label" data-on="Active" data-off="Deactive"></span>
    				                    		</label>
				                    		@endif
				                    		
				                    		<input type="hidden" name="isAdmin" value="{{  $users->isAdmin }}">
					                </td>  
				                    <td><a href="/edit_user/{{ $users->user_id }}"><i class="fa fa-pencil edit_icon_2" aria-hidden="true"></i></a></td>                                   
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
		
		
		$('.switch-input').on('change', function() {					
				     var isChecked = $(this).is(':checked');
				     var selectedData;
				     var $switchLabel = $('.switch-label');
				     console.log('isChecked: ' + isChecked); 
				     
				     if(isChecked) {
				       status = $switchLabel.attr('data-on');
				       user_id = $(this).attr('data-user_id');
				     } else {
				       status = $switchLabel.attr('data-off');
				       user_id = $(this).attr('data-user_id');
				     }
				     
				     var isAdmin = $("input[name='isAdmin']").val();
				     
				     $.ajax({
				   	url: '/update_user_info',
				   	type: 'POST',
				   	data: {
				   	    "_token": "{{ csrf_token() }}",
				   	    status: status,
				   	    user_id: user_id,
				   	    name: 'just_status',
				   	    isAdmin: isAdmin
				   	    
				   	},
				   })
				   .done(function() {
				   	// location.reload();
				   });

				     console.log('Selected data: ' + selectedData);
				     console.log('Selected userid: ' + user_id);
				     
				   });
				   
				   function setSwitchState(el, flag) {
				     el.attr('checked', flag);
				   }
	});
</script>



@endsection()