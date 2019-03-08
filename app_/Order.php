<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model

{

	protected $table = 'customer_order';
    protected $fillable = ['product_id', 'customer_id', 'total_price', 'quantity'];

     //Primary Key
   public $primaryKey = 'id';

   public function products(){
        return $this->belongsTo('App\Products', 'product_id');
   }

   public function users(){
        return $this->belongsTo('App\User', 'customer_id');
   }
}
