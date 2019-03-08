@extends('main')

@section('title', 'Support')

@section('content')	

	<div id="ip-form" class="usa" style="">
	    @if(Auth::user()->isAdmin != 1)
	        <a href="/new_ticket"><button class="add_businees">Add Ticket</button></a>
	    @endif
	    <div class="frame2-voicedid">
               <div class="table-voicedid">
                  <table>
                     <thead>
                        <tr class="thead">
                           <th></th>
                           <th>Local Time</th>
                           <th>Type</th>
                           @if(Auth::user()->isAdmin == 1)
                           <th>Source</th>
                           @endif
                           <th>Title</th>
                           <th>Last Replier</th>
                           <th>Status</th>
                        </tr>
                     </thead>
                     <tbody>
                          @foreach($data as $tickets)
                            <tr>
                                <?php 
                                
                                $class = \App\Http\Controllers\MainController::last_reply($tickets->ticket_id);
                                
                                ?>
                           <td><input type="checkbox"></td>
                           <td>{{ $tickets->date}}</td>
                           <td>{{ $tickets->ticket_type}}</td>
                           @if(Auth::user()->isAdmin == 1)
                           <td>{{ $tickets->users->name}}</td>
                           @endif
                           <td>{{ $tickets->ticket_title}}<br><a href="/title/{{ $tickets->ticket_id }}">Show More</a></td>
                           <td>{{ $class->users->name }}</td>
                           @if($tickets->ticket_status == 'Open')
                           <td><span class="open_">{{ $tickets->ticket_status}}</span></td>
                           @else
                           <td><span class="close_">{{ $tickets->ticket_status}}</span></td>
                           @endif
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
	</div>
@endsection()