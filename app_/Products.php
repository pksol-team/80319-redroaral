<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	protected $table = 'products';

	public $primaryKey = 'id';

    protected $fillable = ['product_name', 'staff_id', 'in_stock', 'price'];

    public function order(){
          return $this->hasMany('App\Orders');
      }
}
