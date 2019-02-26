@extends('main')

@section('title', 'Lead Submission')
@section('content')	
	<div id="dashboard-form" class="usa">
		<div id="changerequest-form" class="usa" style="">
	        <div class="frame2-changereq" id="frame2-changereq">
	            <div class="changereq-title">
	                <label>New Lead Submission</label>
	            </div>

				<form id="contact-form" class="form-horizontal" method="POST" action="">
					<input type="hidden" name="_method" value="PUT">
	              	{{ csrf_field() }}
		            <div class="row1-changereq-info">
		                <div class="changereq-input">
		                    <label>Date</label>
		                    <input type="text" name="date">
		                </div>
		                <div class="changereq-input">
		                    <label>Item Purchased</label>
		                    <input type="text" name="item_purchased">
		                </div>
		                <div class="changereq-input">
		                    <label>Quantity</label>
		                    <input type="text" name="quantity">
		                </div>
		                <div class="changereq-input">
		                    <label>Capex No</label>
		                    <input type="text" name="capex_no">
		                </div>
		                <div class="changereq-input">
		                    <label>Asset Tag</label>
		                    <input type="text" name="asset_tag">
		                </div>
		                <div class="changereq-input">
		                    <label>Upload Invoice(pdf only)</label>
		                    <input type="file" name="upload">
		                </div>
		                <div class="changereq-textarea">
		                    <label>Comments</label>
		                    <textarea name="comment">
		                    </textarea>
		                </div>
		                <button type="submit" class="btn-changereq-submit">Submit</button>
		            </div>
		        </form>
	        </div>
		</div>
	</div>

@endsection()