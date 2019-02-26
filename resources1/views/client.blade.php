@extends('main')

@section('title', 'Customer List')
@section('content')	
<div id="changerequest-form" class="usa">
		    <div class="frame3-changereq" id="frame3-changereq">
		         

		                <div class="table-changereq">
		                        <table class="table-changereq-data">
		                                <thead>
		                                   <tr>
							                   <th>Id</th>
							                   <th>Name</th>
							                   <th>Email</th>
							                   <th>Total Purchased</th>
							                 </tr>
		                                </thead>

		                                               <tbody>
		                                               		@for ($i = 0; $i < count($data); $i++)
		                                		               <tr>
		                                		                 <td>{{ $data['clients'][$i]->id }}</td>
		                                		                 <td>{{ $data['clients'][$i]->name }}</td>
		                                		                 <td>{{ $data['clients'][$i]->email }}</td>
		                                		                 <td>{{ $data['purchased'][$i] }}</td>		                 
		                                		               </tr>	              	
		                                               		@endfor
		                                               </tbody>
		                            	               {{-- <tbody>
		                            	               	@foreach($data as $orders)
		                            		               <tr>
		                            		                 <td>{{ $orders->id }}</td>
		                            		                 <td>{{ $orders->products->product_name }}</td>
		                            		                 <td>{{ $orders->quantity }}</td>
		                            		                 <td>{{ $orders->total_price }}</td>
		                            		                 <td>
		                            		                 	@if ($orders->status == 'Pending')
		                            		                 		@php
		                            		                 			$class = 'btn-danger';		
		                            		                 		@endphp
		                            		                 	@elseif($orders->status == 'Processing')
		                            			                 	@php
		                            			                 		$class = 'btn-primary';		
		                            			                 	@endphp
		                            			                @else
		                            				                @php
		                            				                	$class = 'btn-success';		
		                            				                @endphp
		                            		                 	@endif
		                            							<button class="btn btn-small {{ $class }}">
		                            		                 	{{ $orders->status }}								
		                            							</button>
		                            		                 </td>
		                            		                @if(Auth::user()->isAdmin == 1)
		                            		                 <td><a href="/order/{{ $orders->id }}/edit">
		                            		                 		<i class="fa fa-edit" style="font-size:26px; color: black"></i>	
		                            		                 	</a></td>
		                            	                   	@endif
		                            		               </tr>	               	
		                            		            @endforeach
		                            	               </tbody> --}}
		                            </table>
		                        </div>
		                </div>
		                
		            </div>
	{{--  <div id="content-wrapper">

	    <div class="container-fluid">

	      <!-- Breadcrumbs-->
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="#">Customer List</a>
	        </li>
	        <li class="breadcrumb-item active">Overview</li>
	      </ol>

	      <!-- Icon Cards-->
	       <!-- DataTables Example -->
	       <div class="card mb-3">
	         <div class="card-header">
	           <i class="fas fa-table"></i>
	           Total Customer</div>
	         <div class="card-body">
	           <div class="table-responsive">
	             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	               <thead>
	                 <tr>
	                   <th>Id</th>
	                   <th>Name</th>
	                   <th>Email</th>
	                   <th>Total Purchased</th>
	                 </tr>
	               </thead>	               
	               <tbody>
	               		@for ($i = 0; $i < count($data); $i++)
			               <tr>
			                 <td>{{ $data['clients'][$i]->id }}</td>
			                 <td>{{ $data['clients'][$i]->name }}</td>
			                 <td>{{ $data['clients'][$i]->email }}</td>
			                 <td>{{ $data['purchased'][$i] }}</td>		                 
			               </tr>	              	
	               		@endfor
	               </tbody>
	               
	             </table>
	           </div>
	         </div>
	         <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
	       </div>
	    </div>
	  </div> --}}

@endsection()
