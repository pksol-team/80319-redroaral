@extends('main')

@section('title', 'Product List')
@section('content')	

	

	<div id="changerequest-form" class="usa">
	    @if (auth()->user()->isAdmin == 1)
	       
	    <div class="frame1-changereq">     <div class="btn-add-changereq" id
	    ="btn-add-changereq">         <a
	    href="/product/create"><button>Add Product	</button></a>
	    </div> </div> @endif

	   
	    <div class="frame3-changereq" id="frame3-changereq">
	         

	                <div class="table-changereq">
	                        <table class="table-changereq-data">
	                                <thead>
	                                    <tr class="thead">                                                                
	                                        <th>Id</th>
                       	                   <th>Name</th>
                       	                   <th>Quantity</th>
                       	                   <th>Price</th>
                       	                   <th>Action</th>	                                        
	                                    </tr>
	                                </thead>
	                            	
	                            	<tbody>
	                            		               	@foreach($data as $products)
	                            			               <tr>
	                            			                 <td>{{ $products->id }}</td>
	                            			                 <td>{{ $products->product_name }}</td>
	                            			                 <td>{{ $products->in_stock }}</td>
	                            			                 <td>{{ $products->price }}</td>
	                            			                 <td>             	
	                            			                 	@if (Auth::user()->isAdmin == 1)
	                            			                 	<a href="/product/{{ $products->id }}/edit">
	                            			                 		<i class="fa fa-edit" style="font-size:26px; color: black"></i>	
	                            			                 	</a>
	                            			                 	<form action="{{ url('/product', ['id' => $products->id]) }}" method="post" style="margin-top: -19%; margin-left: 25%;">
	                            		                    <button style="border: none; background: white;font-size:26px;"><i class="fa fa-trash" aria-hidden="true"></i></button>
	                            			                 	    {!! method_field('delete') !!}
	                            			                 	    {!! csrf_field() !!}
	                            			                 	</form>
	                            			                 	@else
	                            			                 	<a href="/product/{{ $products->id }}">
	                            			                 		<i class="fa fa-shopping-cart" style="font-size:26px; color: black"></i>	
	                            			                 	</a>
	                            			                 	@endif
	                            								
	                            			                 </td>
	                            			               </tr>	               	
	                            			            @endforeach
	                            	</tbody>
	                            </table>
	                        </div>
	                </div>
	                
	            </div>




	 {{-- <div id="content-wrapper">

	    <div class="container-fluid">

	      <!-- Breadcrumbs-->
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="#">Product List</a>
	        </li>
	        <li class="breadcrumb-item active">Overview</li>
	      </ol>

	      <!-- Icon Cards-->
	       <!-- DataTables Example -->
	       <div class="card mb-3">
	         <div class="card-header">
	           <i class="fas fa-table"></i>
	           Total Products</div>
	         <div class="card-body">
	           <div class="table-responsive">
	             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	               <thead>
	                 <tr>
	                   <th>Id</th>
	                   <th>Name</th>
	                   <th>Quantity</th>
	                   <th>Price</th>
	                   <th>Action</th>
	                 </tr>
	               </thead>	               
	               <tbody>
	               	@foreach($data as $products)
		               <tr>
		                 <td>{{ $products->id }}</td>
		                 <td>{{ $products->product_name }}</td>
		                 <td>{{ $products->in_stock }}</td>
		                 <td>{{ $products->price }}</td>
		                 <td>             	
		                 	@if (Auth::user()->isAdmin == 1)
		                 	<a href="/product/{{ $products->id }}/edit">
		                 		<i class="fa fa-edit" style="font-size:26px; color: black"></i>	
		                 	</a>
		                 	<form action="{{ url('/product', ['id' => $products->id]) }}" method="post" style="margin-top: -19%; margin-left: 25%;">
	                    <button style="border: none; background: white;font-size:26px;"><i class="fa fa-trash" aria-hidden="true"></i></button>
		                 	    {!! method_field('delete') !!}
		                 	    {!! csrf_field() !!}
		                 	</form>
		                 	@else
		                 	<a href="/product/{{ $products->id }}">
		                 		<i class="fa fa-shopping-cart" style="font-size:26px; color: black"></i>	
		                 	</a>
		                 	@endif
							
		                 </td>
		               </tr>	               	
		            @endforeach
	               </tbody>
	               
	             </table>
	           </div>
	         </div>
	         <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
	       </div>
	    </div>
	  </div> --}}

@endsection()
