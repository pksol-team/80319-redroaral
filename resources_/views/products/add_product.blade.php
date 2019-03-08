@extends('main')

            @if($data != '')
	            @php
	            	$action = "/product/".$data->id;
	            	$product_name = $data->product_name;
	            	$in_stock = $data->in_stock;
	            	$price = $data->price;
	            	$post = '<input type="hidden" name="_method" value="PUT">';
	            	$title = "Update";		            	
	            @endphp
	        @else
		        @php
		        	$action = "/product";
		        	$product_name = "";
		        	$in_stock = "";
		        	$price = "";
		        	$post = '';
	            	$title = "Add";		            	
		        @endphp
            @endif

@section('title', $title.' Product')
@section('content')	
	
		    	<div class="frame2-changereq" id="frame2-changereq">
		    	            <div class="changereq-title">
		    	                <label>Add New Product</label>
		    	            </div>

		    	            <div class="row1-changereq-info">
		    	            	<form id="contact-form" class="form-horizontal" method="POST" action="{{ $action }}">
		    	            					@php
		    	            						echo $post;
		    	            					@endphp
		    	            	              {{ csrf_field() }}
			    	                <div class="changereq-input">
			    	                    <label for="product_name" class="">Product Name</label>
			    	                    <input type="text" id="product_name" name="product_name" class="form-control" required value="{{ $product_name }}">
			    	                </div>
			    	                <div class="changereq-input">
			    	                    <label for="number" class="">In Stock</label>
	                                <input type="number" id="number" name="in_stock" class="form-control" required value="{{ $in_stock }}">
			    	                </div>  

			    	                 <div class="changereq-input">
			    	                    <label for="price" class="">Price</label>
	                                <input type="text" id="price" name="price" class="form-control" required value="{{ $price }}">
			    	                </div>                                           

			    	                <button class="btn-changereq-submit">{{ $title }} Product</button>
				    	        </form>

								

			    	            </div>
		    	            </div>
		    	</div>
	           

{{-- 	<div id="content-wrapper">

	  <div class="container-fluid">

	    <ol class="breadcrumb">
	      <li class="breadcrumb-item">
	        <a href="#">{{ $title }} Product</a>
	      </li>
	      <li class="breadcrumb-item active">Overview</li>
	    </ol>

	    <div class="row" style="margin-top: 10%;">
	     <div class="col-md-5 mb-md-0 mb-5 offset-md-3">
	           
			<form id="contact-form" class="form-horizontal" method="POST" action="{{ $action }}">
				@php
					echo $post;
				@endphp
              {{ csrf_field() }}
	                    <div class="row">

	                        <div class="col-md-12">
	                            <div class="md-form mb-0">
	                                <label for="product_name" class="">Product Name</label>
	                                <input type="text" id="product_name" name="product_name" class="form-control" required value="{{ $product_name }}">
	                            </div>
	                        </div>


	                    </div>
	                    <div class="row">
	                        <div class="col-md-12">
	                            <div class="md-form mb-0">
	                                <label for="number" class="">In Stock</label>
	                                <input type="number" id="number" name="in_stock" class="form-control" required value="{{ $in_stock }}">
	                            </div>
	                        </div>
	                        </div>
	                    <div class="row">
	                        <div class="col-md-12">
	                            <div class="md-form mb-0">
	                                <label for="price" class="">Price</label>
	                                <input type="text" id="price" name="price" class="form-control" required value="{{ $price }}">
	                            </div>
	                        </div>
	                    </div>
	                    <br>
	                    <button class="btn btn-primary">{{ $title }} Product</button>

	                </form>
        	
	    </div>

	   

	  </div>	 

	</div> --}}


	
@endsection()