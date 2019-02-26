<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials._stylesheets')
</head>

<body>

	@if(Auth::check())	

	  	<div class="form">
		  	@include('layouts.nav')	
			
			@include('layouts.sidebar')	
		
	  		@yield('content')



	  		
		</div>
			{{-- @include('layouts.footer')	 --}}

  		
  		
  	@else

  			@yield('login_register')

  	@endif


  	
	
  	


 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

 <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

 <script>
 	$(document).ready(function() {
 	    $('#example').DataTable();
 	} );



 	$('.datepicker-starttime').datepicker({
	 			autoclose: true,
	 			format: 'yyyy-mm-dd'
	 		});
 </script>


</body>

</html>

