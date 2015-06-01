<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $fillable = [
		'consignee',
		'product_type',
		'product_description',
		'quantity',
		'gross_weight',
		'destination',
		'destination_address',
		'courier_id',
		'HAWB'
	];

	public function client(){
		return $this->belongsTo('App\Client');
	}

	public function statuses(){
		return $this->hasMany('App\Status');
	}

}
