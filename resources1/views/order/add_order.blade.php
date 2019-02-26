@extends('main')

@section('title', 'Dashboard')
@section('content')	
	

	            @if($data != '')
		            @php
		            foreach ($data as $key => $data) {
		            	$action = "/order/".$data->id;
		            	$product_name = $data->products->product_name;
		            	$quantity = $data->quantity;
		            	$price = $data->total_price;
		            	$status = $data->status;
		            }
		            	$title = "Edit";		            	
		            @endphp
		        @else
			        @php
			        	$action = "/order";
			        	$product_name = "";
			        	$quantity = "";
			        	$price = "";
		            	$status = '';	            	
		            	$title = "Add";	
			        @endphp
	            @endif

	<div id="content-wrapper">

	  <div class="container-fluid">

	    <!-- Breadcrumbs-->
	    <ol class="breadcrumb">
	      <li class="breadcrumb-item">
	        <a href="#">{{ $title }} Order</a>
	      </li>
	      <li class="breadcrumb-item active">Overview</li>
	    </ol>

	    <!-- Icon Cards-->
	    <div class="row" style="margin-top: 10%;">
	     <div class="col-md-5 mb-md-0 mb-5 offset-md-3">
	           
			<form id="contact-form" class="form-horizontal" method="POST" action="{{ $action }}">
				<input type="hidden" name="_method" value="PUT">
              {{ csrf_field() }}
	                    <!--Grid row-->
	                    <div class="row">

	                        <!--Grid column-->
	                        <div class="col-md-12">
	                            <div class="md-form mb-0">
	                                <label for="product_name" class="">Product Name</label>           
	                                <input type="text" id="product_name" name="product_name" class="form-control" required value="{{ $product_name }}">
	                            </div>
	                        </div>
	                        <!--Grid column-->


	                    </div>
	                    <div class="row">
	                        <!--Grid column-->
	                        <div class="col-md-12">
	                            <div class="md-form mb-0">
	                                <label for="number" class="">Quantity</label>
	                                <input type="number" id="number" name="quantity" class="form-control" required value="{{ $quantity }}">
	                            </div>
	                        </div>
	                        <!--Grid column-->
	                        </div>
	                    <!--Grid row-->

	                    <!--Grid row-->
	                    <div class="row">
	                        <div class="col-md-12">
	                            <div class="md-form mb-0">
	                                <label for="price" class="">Total Amount</label>
	                                <input type="text" id="price" name="price" class="form-control" required value="{{ $price }}">
	                            </div>
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="col-md-12">
	                            <div class="md-form mb-0">
	                                <label for="price" class="">Stauts</label>
	                                <select name="status" class="form-control">
	                                	<option value="Pending">Pending</option>
	                                	<option value="Processing">Processing</option>
	                                	<option value="Completed">Completed</option>
	                                </select>
	                            </div>
	                        </div>
	                    </div>
	                    <!--Grid row-->
	                    <br>
	                    <button class="btn btn-primary">{{ $title }} Order</button>

	                </form>
				
	    </div>

	   

	  </div>
	  <!-- /.container-fluid -->

	  <!-- Sticky Footer -->
	 

	</div>


	
@endsection()