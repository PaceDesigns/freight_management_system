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
		'courier',
		'HAWB'
	];

}
