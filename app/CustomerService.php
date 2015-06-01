<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerService extends Model {

	protected $fillable = [
		'description',
		'client_id',
	];

	public function client(){
		return $this->belongsTo('App\Client');
	}

}
