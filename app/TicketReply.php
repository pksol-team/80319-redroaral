<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketReply extends Model

{

	protected $table = 'ticket_reply';
    protected $fillable = ['ticket_id', 'reply_date', 'user_id', 'reply_status', 'message'];

     //Primary Key
   public $primaryKey = 'reply_id';
    
    public function tickets(){
        return $this->belongsTo('App\Tickets', 'ticket_id');
   }
  
   public function users(){
        return $this->belongsTo('App\User', 'user_id');
   }
}