<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CourierService extends Model {

	protected $fillable = [
		'description',
		'courier_id',
	];

	public function courier(){
		return $this->belongsTo('App\Courier');
	}

}
