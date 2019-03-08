@extends('main')

@section('title', 'Lead Gen Accounts')
@section('content')	

<div id="ip-form" class="usa" style="">		
	<div class="frame1-ip">
		<h3 style="margin-left: 2%;">Lead Gen Accounts</h3>
	    <div class="table-ip">
	    	<table id="example" class="table table-striped table-bordered" style="width:100%">
	            <thead>
	                <tr>
	                    <th>ID</th>
	                    <th>Lead Gen User</th>	                    
	                    <th>View Submitted Leads</th>
	                </tr>
	            </thead>
	        
	            <tbody>
                	@foreach($data as $users)
						<tr>
							<td>{{ $users->user_id }}</td>
							<td>{{ $users->name }}</td>
							<td><a href="/lead_all_request/pending/{{ $users->user_id }}"><button type="" class="view_btn">View</button></a></td>
						</tr>
                    @endforeach                                        
	            </tbody>
	        </table>
	    </div>	            
	</div>
</div>



@endsection()