@extends('main')

@section('title', 'Lead Generators')
@section('content')	
		<div id="ip-form" class="usa" style="">
              <a href="/create_lead_generator"><button class="add_businees">Add Users</button></a>

				<div class="frame3_top frame1-ip">
					<h3 style="margin-left: 2%;">Lead Generators</h3>
				    <div class="table-ip">
				        <table>
				            <thead>
				                <tr>
				                    <th>Name</th>
				                    <th>Email</th>
				                    <th>Phone</th>
				                    <th>Status</th>
				                    <th>Action</th>
				                </tr>
				            </thead>
				        
				            <tbody>
				                @foreach($data as $users)
				                <tr>
				                    <td>{{ $users->name }}</td>
				                    <td>{{ $users->email }}</td>
				                    <td>{{ $users->phone }}</td> 
				                    <td>
        		                    	<label class="switch">
        		                    		<input type="hidden" name="status" value="{{ $users->status }}">
                            	          <input type="checkbox" class="warning" name="option" value="">
                            	          <span class="slider round"></span>
                            	        </label>
					                </td>  
				                    <td><a href="/edit_user/{{ $users->user_id }}"><i class="fa fa-pencil edit_icon_2" aria-hidden="true"></i></td>                                   
				                </tr>
				                @endforeach
				            </tbody>
				        </table>
				    </div>	            
				</div>
			</div>


			<script>
					
				jQuery(document).ready(function($) {

					$("input[name='status']")
					console.log($(".slider").css('background-color'));
				});

			</script>
@endsection()