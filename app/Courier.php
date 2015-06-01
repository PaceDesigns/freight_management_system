<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model {

	protected $fillable = [
		'name',
		'establishment_date',
		'residential_address',
		'postal_address',
		'phone_number',
		'email',
	];

	public function services(){
		return $this->hasMany('App\CourierService');
	}

	

}
