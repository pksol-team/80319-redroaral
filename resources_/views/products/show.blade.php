@extends('main')

@section('title', 'Product List')
@section('content')	

	    	<div class="frame2-changereq" id="frame2-changereq">
	    	            <div class="changereq-title">
	    	                <label>Purchase Product</label>
	    	            </div>

	    	            <div class="row1-changereq-info">
	    	            	<form id="contact-form" class="form-horizontal" method="post" action="/order">
	                    		{{ csrf_field() }}
		    	                <div class="changereq-input">
		    	                     <label for="product_name" class="">Product Name : <b>{{ $data->product_name }}</b></label>
		    	                </div>
		    	                <div class="changereq-input">
		    	                    <label for="number" class="">In Stock: <b>{{ $data->in_stock }}</b></label>
		    	                </div>  
								
		    	                 <div class="changereq-input">
		    	                 	<label for="price" class="">Price : <b>{{ $data->price }}</b></label>
		    	                 	
		    	                 </div>                                           
								<div class="changereq-input">
									
		    	                 <label for="quantity" class="">Total Items</label>
		    	                 	
		    	                 <input type="text" id="quantity" name="quantity" class="form-control" required >

								</div>

								<input type="hidden" name="id" value="{{ $data->id }}">
	      	                    
	      	                    <input type="hidden" name="price" value="{{ $data->price }}">
		    	                <button class="btn-changereq-submit">Purchase Product</button>
			    	        </form>

							

		    	            </div>
	    	            </div>
	    	</div>

{{-- 	 <div id="content-wrapper">

	    <div class="container-fluid">
	      <!-- Breadcrumbs-->
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="#">Product List</a>
	        </li>
	        <li class="breadcrumb-item active">Overview</li>
	      </ol>

	       <div class="row" style="margin-top: 10%;">
	     <div class="col-md-5 mb-md-0 mb-5 offset-md-3">

	      			<form id="contact-form" class="form-horizontal" method="post" action="/order">
	                    {{ csrf_field() }}
	      	                    <!--Grid row-->
  	                    <div class="row">

  	                        <!--Grid column-->
  	                        <div class="col-md-12">
  	                            <div class="md-form mb-0">
  	                                <label for="product_name" class="">Product Name : <b>{{ $data->product_name }}</b></label>
  	                            </div>
  	                        </div>
  	                        <!--Grid column-->
							</div>
	      	                    <div class="row">
	      	                        <!--Grid column-->
	      	                        <div class="col-md-12">
	      	                            <div class="md-form mb-0">
	      	                                <label for="number" class="">In Stock: <b>{{ $data->in_stock }}</b></label>
	      	                            </div>
	      	                        </div>
	      	                        <!--Grid column-->
	      	                        </div>
	      	                    <!--Grid row-->

	      	                    <!--Grid row-->
	      	                    <input type="hidden" name="id" value="{{ $data->id }}">
	      	                    
	      	                    <input type="hidden" name="price" value="{{ $data->price }}">
	      	                    <div class="row">
	      	                        <div class="col-md-12">
	      	                            <div class="md-form mb-0">
	      	                                <label for="price" class="">Price : <b>{{ $data->price }}</b></label>
	      	                            </div>
	      	                        </div>
	      	                    </div>
	      	                    <div class="col-md-12">
	      	                        <div class="md-form mb-0">
	      	                            <label for="quantity" class="">Total Items</label>
	      	                            <input type="text" id="quantity" name="quantity" class="form-control" required >
	      	                        </div>
	      	                    </div>
	      	                    <!--Grid row-->
	      	                    <br>
	      	                    <button class="btn btn-primary">Purchase Product</button>

	      	                </form>
		</div>
	</div>
	               
	               
		</div>
	</div> --}}
@endsection()
