<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	protected $fillable = [
		'name',
		'nationality',
		'company_name',
		'national_id',
		'email',
		'phone_number',
		'occupation',
		'address',
	];

}
