<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model {

	protected $fillable = [
		'status',
		'code',
		'location',
		'courier_id',
		'product_id',
	];

	public function product(){
		return $this->belongsTo('App\Product');
	}

}
