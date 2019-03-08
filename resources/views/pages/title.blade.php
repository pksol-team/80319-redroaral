@extends('main')

@section('title', 'Support')

@section('content')	
	<div id="ip-form" class="usa" style="">
	  <div class="frame3-voicedid" style="">
                    <div class="title-voicedid" id="info">
                       <label>{{ $ticket->ticket_title }}</label>
                       <p class="sub-head"><span class="icon"><i class="fa fa-calendar"></i></span>{{ $ticket->date }}</p>
                       
                    </div>
                     <div class="cls_button">
                         @if($ticket->ticket_status == 'Close')
                         <a href="/close_ticket/{{ $ticket->ticket_id }}/open"><button class="close_button">Open Ticket</button></a>
                         @else
                          <a href="/close_ticket/{{ $ticket->ticket_id }}/close"><button class="close_button">Close Ticket</button></a>
                          @endif
                      </div>
                    <div class="table-view-voicedid test">
                       <div class="reply-sec">
                           @foreach($data as $ticket_reply)
                              <div class="icon-sec">
                                 <i class="fa fa-user-circle" aria-hidden="true"></i>
                              </div>
                              <div class="type-reply">
                                 <p><b>{{ $ticket_reply->users->name}}</b> ({{ $ticket_reply->reply_date}})</p>
                                 <p>{{ $ticket_reply->message}}</p>
                              </div>
                          @endforeach
                       </div>
                       @if($ticket->ticket_status == 'Open')
                       <div class="reply-type-area">
                           <form id="contact-form" class="form-horizontal" method="POST" action="/add_reply">
	              	        {{ csrf_field() }}
                           <label>Write Your Reply</label>
                          <textarea rows="10" cols="100" name="message" required=""></textarea>
                          <input type="hidden" name="user_id" value="{{ Auth::user()->user_id}}">
                          <input type="hidden" name="reply_date" value="{{ date('Y-m-d h:i:s') }}">
                          <input type="hidden" name="ticket_id" value="{{ $ticket->ticket_id }}">
                          <div class="submit-button">
                             <button type="submit">Reply</button>
                          </div>
                            </form>
                       </div>
                       @endif
                     
                    </div>
                   
                 </div>
	</div>
	

@endsection()