<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model

{

	protected $table = 'tickets';
    protected $fillable = ['ticket_type', 'ticket_source', 'ticket_title', 'ticket_description', 'user_id', 'date'];

     //Primary Key
   public $primaryKey = 'ticket_id';

  
   public function users(){
        return $this->belongsTo('App\User', 'user_id');
   }
}